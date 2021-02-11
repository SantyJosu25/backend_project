<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\InsertarContact;
use App\Mail\SendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * @OA\Info(title="API Contact", version="1.0")
 *
 * @OA\Server(url="http://backend_project.test")
 */


class ContactController extends Controller
{

    public function mostrar()
    {
        $contact = Contact::all();
        return response()->json($contact, 201);
    }
    /**
     * @OA\Post(
     * path="/api/contact/insertar",
     * summary="Guardar datos de contacto",
     * @OA\RequestBody(
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          @OA\Schema(
     *              @OA\Property(
     *                  property="name",
     *                  type="string"
     *                  ),
     *              @OA\Property(
     *                  property="email",
     *                  type="string"
     *                  ),
     *              @OA\Property(
     *                  property="phone",
     *                  type="string"
     *                  ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *                  ),
     *                  example={"name": "Santiago Anrango", "email": "santy2516@gmail.com","phone": "+593 98 786 6683", "message":"Test de envio de email"}
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK"
     *      )
     * )
     */

    public function insertar(Request $request)
    {
        /* $contact = $request->all();
        Contact::insert($contact); */
        try {
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            try {
                Mail::to($request->email)->send(new SendContact($contact));
                $contact->send_email = "Se envio el mail";
            } catch (\exception $e) {
                $contact->send_email = "Fallo el envio del mail {$e->getMessage()}";
            }
            $contact->save();
        } catch (\exception $e) {
            return response()->json("Se genero un error: {$e->getMessage()}", 404);
        }

        return response()->json("Registro agregado con exito {$request->email}", 201);
    }
}
