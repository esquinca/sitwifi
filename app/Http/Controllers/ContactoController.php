<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Mail;

class ContactoController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function postEmail(Request $request)
    {

    	$nombre = $request->input('name');
    	$empresa = $request->input('empresa');
    	$email = $request->input('email');
    	$subject = $request->input('subject');
    	$producto = $request->input('producto');
    	$mensaje = $request->input('message');

    	$data = [
    		'nombre' => $nombre,
    		'empresa' => $empresa,
    		'email' => $email,
    		'telefono' => $subject,
    		'producto' => $producto,
    		'mensaje' => $mensaje
    	];

        Mail::send('email', $data, function ($message) {
            //$message->from('contactoweb@sitwifi.com', 'ContactoSitwifiWeb');
            $message->to('jesquinca@sitwifi.com', 'jose')->subject('Contacto SitWifi Web');

        });


        return "OK";
    }

}
