<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegistroController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		header('X-Content-Type-Options: nosniff');
		header('X-Frame-Options: SAMEORIGIN');
		header('X-XSS-Protection: 1;mode=block');
		date_default_timezone_set('America/Mexico_City');
		setlocale(LC_ALL, "es_MX");

		$this->load->model('Usuario');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	function index()
	{
		//echo var_dump($this->Usuario->getUserByCorreo('mr._dany@hotmail.com'));
		$dato['string'] = "Let's Walk | Registro";
		$dato['css'] = "registro";

		$dato['alt_css'] = "<link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css'>";
		$dato['alt_js'] = "<script src='https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js'></script>" .
			"<script src=" . base_url() . "private/js/registro/index.js" . "></script>" .
			"<script src='https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/1.0/zxcvbn.min.js'></script>" .
			"<script type='text/javascript' src=" . base_url() . "private/js/registro/zxcvbn-bootstrap4-strength-meter.js" . "></script>" .
			"<script type='text/javascript'>
				$(document).ready(function () {
					$('#StrengthProgressBar').zxcvbnProgressBar({
						passwordInput: '#Passwd',
						ratings: ['Muy Débil', 'Débil', 'Ok', 'Fuerte', 'Muy fuerte']
					});
				});
			</script>
			<script type='text/javascript'>
				$(document).ready(function () {
					$('#StrengthProgressBar_b').zxcvbnProgressBar({
						passwordInput: '#Passwd_b',
						ratings: ['Muy Débil', 'Débil', 'Ok', 'Fuerte', 'Muy fuerte']
					});
				});			  
			</script>";

		$this->load->view('Templates/header', $dato);
		$this->load->view('registro/registroView', $dato);
		$this->load->view('Templates/footer');
	}

	function validRegFetch()
	{
		if ($this->input->post()) {
			//array de retorno para correo y captcha
			$returnData['captcha'] = false;
			$returnData['correo']['band'] = false;
			$returnData['passwd']['band'] = false; //longitud de la contraseña
			$returnData['passwd_1']['band'] = false; //coincidencia de contraseñas
			$returnData['term'] = false; //terminos y condiciones

			$returnData['correo']['msj'] = 'Este campo es obligatorio';
			$returnData['passwd']['msj'] = 'Este campo es obligatorio'; //longitud de la contraseña
			$returnData['passwd_1']['msj'] = 'Este campo es obligatorio'; //coincidencia de contraseñas

			//VALIDACIÓN CAPTCHA 
			// Creamos el enlace para solicitar la verificación con la API de Google.
			$params = array();  // Array donde almacenar los parámetros de la petición
			$params['secret'] = '6LcLefUUAAAAALYKeJhUZrvBeEcyDUKjjkgekW8x'; // Clave privada
			if (!empty($this->input->post()) && $this->input->post('g-recaptcha-response')) {
				$params['response'] = urlencode($this->input->post('g-recaptcha-response'));
			}
			$params['remoteip'] = $_SERVER['REMOTE_ADDR'];
			// Generar una cadena de consulta codificada estilo URL
			$params_string = http_build_query($params);
			// Creamos la URL para la petición
			$requestURL = 'https://www.google.com/recaptcha/api/siteverify?' . $params_string;
			// Inicia sesión cURL
			$curl = curl_init();
			// Establece las opciones para la transferencia cURL
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $requestURL,
			));
			// Enviamos la solicitud y obtenemos la respuesta en formato json
			$response = curl_exec($curl);
			// Cerramos la solicitud para liberar recursos
			curl_close($curl);

			//se decodifica el json para obtener la respuesta (en caso de ser unica validacion se puede omitir este paso y enviar la respuesta de arriba)
			$response = json_decode($response);
			//respuesta del captcha
			$returnData['captcha'] = $response->success;

			//VALIDACIÓN CORREO
			$correo = $this->input->post('Correo');
			$correoExiste = $this->Usuario->getUserByCorreo($correo);

			if ($correo != "") {
				if (!$correoExiste) {
					$returnData['correo']['band'] = true;
				} else {
					$returnData['correo']['msj'] = "Correo ya registrado";
				}
			}
			//VALIDACIÓN CONTRASEÑAS
			if ($this->input->post('Passwd') != "") {
				if (strlen($this->input->post('Passwd')) >= 6) //longitud de contraseña
					$returnData['passwd']['band'] = true;

				else
					$returnData['passwd']['msj'] = "Ingresa mínimo 6 caracteres";
			}

			if ($this->input->post('Passwd_1') != "") {
				if ($this->input->post('Passwd') == $this->input->post('Passwd_1')) //coincidencia de contraseñas
					$returnData['passwd_1']['band'] = true;

				else
					$returnData['passwd_1']['msj'] = "Las contraseñas deben coincidir";
			}

			//VALIDACIÓN DE TÉRMINOS Y CONDICIONES
			if ($this->input->post('term'))
				$returnData['term'] = true;



			// Devuelve la respuesta en formato JSON
			//echo $response;
			echo json_encode($returnData);
		}
	}

	function registrar()
	{
		if ($this->session->userdata('user')) {
			redirect("InicioController");
		}
		$dato['string'] = "Let's Walk | Registro";
		$dato['css'] = "registro";

		$dato['alt_css'] = "<link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css'>";
		$dato['alt_js'] = "<script src='https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js'></script>" .
			"<script src=" . base_url() . "private/js/registro/index.js" . "></script>" .
			"<script src='https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/1.0/zxcvbn.min.js'></script>" .
			"<script type='text/javascript' src=" . base_url() . "private/js/registro/zxcvbn-bootstrap4-strength-meter.js" . "></script>" .
			"<script type='text/javascript'>
				$(document).ready(function () {
					$('#StrengthProgressBar').zxcvbnProgressBar({
						passwordInput: '#Passwd, #Passwd_b',
						ratings: ['Muy Débil', 'Débil', 'Ok', 'Fuerte', 'Muy fuerte']
					});
				});
								  
			</script>
			<script type='text/javascript'>
				$(document).ready(function () {
					$('#StrengthProgressBar_b').zxcvbnProgressBar({
						passwordInput: '#Passwd_b',
						ratings: ['Muy Débil', 'Débil', 'Ok', 'Fuerte', 'Muy fuerte']
					});
				});			  
			</script>";


		/*$(document).ready(function () {
									$('#StrengthProgressBar_b').zxcvbnProgressBar({
										passwordInput: '#Passwd_b',
										ratings: ['Muy Débil', 'Débil', 'Ok', 'Fuerte', 'Muy fuerte']
										});
									});*/
		//echo var_dump($this->input->post());
		$this->form_validation->set_rules('Ap_Paterno', '', 'trim|xss_clean|required|alpha');
		$this->form_validation->set_rules('Ap_Materno', '', 'trim|xss_clean|required|alpha');
		$this->form_validation->set_rules('Nombre', '', 'trim|xss_clean|required');
		$this->form_validation->set_rules('Passwd', '', 'trim|xss_clean|required|min_length[6]');
		$this->form_validation->set_rules('Passwd_1', '', 'trim|xss_clean|required|matches[Passwd]');
		$this->form_validation->set_rules('Correo', '', 'trim|xss_clean|required|is_unique[Usuario.Correo]|valid_email');
		$this->form_validation->set_rules('Fecha_Nacimiento', '', 'trim|xss_clean|required|regex_match[/^[0-9]{4}-[0-9]{2}-[0-9]{2}+$/]');
		$this->form_validation->set_rules('Sexo', '', 'trim|xss_clean|required');
		$this->form_validation->set_rules('Telefono', '', 'trim|xss_clean|required|is_natural|exact_length[10]');

		if ($this->form_validation->run() == false) { //si algo esta mal en el form se regresa
			$this->load->view('Templates/header', $dato);
			$this->load->view('registro/registroView', $dato);
			$this->load->view('Templates/footer');
		} else { //todo sale bien en el form entonces se procede a guardar el registro

			//$this->generateRandomString(10)
			$token_email = $this->generateRandomString(10);
			$band = $this->Usuario->insertUserTemp($this->input->post(), $token_email);
			//echo var_dump($band)."<br>";
			if (true) {
				//echo "<br><br>Insertado correctamente<br><br>";
				$id = $this->Usuario->getIdUserByCorreo($this->input->post('Correo'));
				$link = base_url('RegistroController/activarCuentaUser/');
				$link .= "?id=" . $id . "&token=" . $token_email;
				$data['link'] = $link;

				$CI = &get_instance();
				$CI->load->helper('url');
				$CI->load->library('session');
				$CI->config->item('base_url');
				$CI->load->library('email');

				$subject = 'Bienvenido a LetsWalk';

				$msg = $CI->load->view('registro/confirmar_mail', $data, true);

				if ($CI->email
					->from('jesus.martinsamano@gmail.com')
					->to($this->input->post('Correo'))
					->subject($subject)
					->message($msg)
					->set_mailtype('html')
					->send()
				) {
					$this->load->view('registro/pre-confirmacionView');
				} else {
					echo $CI->email->print_debugger();
				}
			} else {
				echo "<br><br>Error al insertar<br><br>";
			}
		}
	}

	function activarCuentaUser()
	{

		$id_user = $this->input->get('id');
		$token = $this->input->get('token');

		$result = $this->Usuario->confirmarCuentaByIdToken($id_user, $token);


		if ($result) {
			if ($this->Usuario->getStatusById($id_user) == 0) {
				$this->Usuario->updateUserToActive($result['Correo']);

				$this->load->view('registro/post-confirmacionView');
			} else {
				$this->load->view('registro/post-confirmacionView2');
			}
		} else {
			redirect("InicioController");
		}
	}

	function generateRandomString($length = 10)
	{
		return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
	}
}
