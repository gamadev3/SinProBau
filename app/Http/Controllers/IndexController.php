<?php

namespace App\Http\Controllers;

use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller {
    public function index() {
        $trendingNotice = News::where("is_trending", "=", "1")->first();

        $salaryCampaign = News::where("salary_campaign", "=", "1")->get();

        return view("home", [
            "salaryCampaign" => $salaryCampaign,
            "trendingNotice" => $trendingNotice
        ]);
    }

    public function virtualCard() {
        return view("virtual-card");
    }

    public function contact() {
        return view("contact");
    }

    public function becomeAMember() {
        return view("become-a-member");
    }

    public function sendEmail(Request $request) {
        try {
            Mail::send([], [], function ($message) use ($request) {
                $htmlContent = "
                    <h2>Detalhes do Formulário</h2>
                    <p><strong>Nome:</strong> {$request->name}</p>
                    <p><strong>Estado Civil:</strong> {$request->maritalStatus}</p>
                    <p><strong>Data de Nascimento:</strong> {$request->birthdate}</p>
                    <p><strong>Naturalidade:</strong> {$request->naturality}</p>
                    <p><strong>RG:</strong> {$request->rg}</p>
                    <p><strong>CPF:</strong> {$request->cpf}</p>
                    <p><strong>Telefone:</strong> {$request->phone}</p>
                    <p><strong>E-mail:</strong> {$request->email}</p>
                    <p><strong>Endereço:</strong> {$request->address}, {$request->number}</p>
                    <p><strong>Complemento:</strong> {$request->complement}</p>
                    <p><strong>Bairro:</strong> {$request->neighborhood}</p>
                    <p><strong>Cidade:</strong> {$request->city} - {$request->state}</p>
                    <p><strong>Local de Trabalho:</strong> {$request->workplace}</p>
                    <p><strong>Grau de Escolaridade:</strong> {$request->degree}</p>
                    <p><strong>Outros:</strong> {$request->ifothers}</p>
                    <h3>Dependentes:</h3>
                    <ul>
                        <li><strong>Dependente 1:</strong> {$request->dependentOne} - {$request->degreeOfKinshipOne} ({$request->dependentOneDate})</li>
                        <li><strong>Dependente 2:</strong> {$request->dependentTwo} - {$request->degreeOfKinshipTwo} ({$request->dependentTwoDate})</li>
                        <li><strong>Dependente 3:</strong> {$request->dependentThree} - {$request->degreeOfKinshipThree} ({$request->dependentThreeDate})</li>
                    </ul>
                    <h3>Outras Informações:</h3>
                    <p><strong>Arquivo:</strong> {$request->file}</p>
                    <p><strong>Instituição:</strong> {$request->institution}</p>
                    <p><strong>Cidade da Instituição:</strong> {$request->institucionCity}</p>
                    <p><strong>Data:</strong> {$request->date}</p>
                    <p><strong>Observações:</strong> {$request->observation}</p>
                ";

                $message->to("anderkaiti@gmail.com")
                    ->subject("Novo formulário de autorização de sindicalização")
                    ->html($htmlContent);
            });

            return redirect()->back()->with("success", "Enviado com sucesso!");
        } catch (Exception $error) {
            return redirect()->back()->with("error", "Ocorreu um erro!");
        }
    }
}
