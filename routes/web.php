<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TuteurController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\PedagogyController;
use App\Http\Controllers\InternshipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ---------- ETUDIANT ----------- */
Route::get('/etudiant/connexion', [EtudiantController::class, 'index'])->name('connexion');
Route::get('/etudiant/inscription', [EtudiantController::class,'inscription'])->name('inscription');
Route::post('/etudiant/inscription', [EtudiantController::class,'traitementInscriptionEtudiant'])->name('traitementInscriptionEtudiant');
Route::get('/etudiant/liste', [EtudiantController::class, 'listeEtudiant'])->name('listeEtudiant');
Route::get('/etudiant/dashboard', [EtudiantController::class, 'etudiantDasboard'])->name('etudiantDasboard');
Route::get('/etudiant/dashboard/evaluation/membre', [EtudiantController::class, 'etudiantEvaluationMembre'])->name('etudiantEvaluationMembre');
Route::post('/etudiant/dashboard/evaluation/membre', [EtudiantController::class, 'traitementEtudiantEvaluationMembre'])->name('traitementEtudiantEvaluationMembre');
Route::get('/etudiant/dashboard/evaluation/tuteur', [EtudiantController::class, 'etudiantEvaluationTuteur'])->name('etudiantEvaluationTuteur');
Route::post('/etudiant/dashboard/evaluation/tuteur', [EtudiantController::class, 'traitementEtudiantEvaluationTuteur'])->name('traitementEtudiantEvaluationTuteur');
Route::get('/etudiant/dashboard/rapport', [EtudiantController::class, 'etudiantRapport'])->name('etudiantRapport');
Route::post('/etudiant/dashboard/rapport', [EtudiantController::class, 'traitementEtudiantRapport'])->name('traitementEtudiantRapport');
Route::get('/etudiant/dashboard/livrable', [EtudiantController::class, 'etudiantLivrable'])->name('etudiantLivrable');
Route::post('/etudiant/dashboard/livrable', [EtudiantController::class, 'traitementEtudiantLivrable'])->name('traitementEtudiantLivrable');


/* ---------- TUTEURS ----------- */
Route::get('/tuteur/connexion', [TuteurController::class, 'index'])->name('connexion');
Route::get('/tuteur/inscription', [TuteurController::class,'inscription'])->name('inscription');
Route::post('/tuteur/inscription', [TuteurController::class,'traitementInscriptionTuteur'])->name('traitementInscriptionTuteur');
Route::get('/tuteur/liste', [TuteurController::class, 'listeTuteur'])->name('listeTiteur');
Route::get('/tuteur/dashboard', [TuteurController::class, 'tuteurDasboard'])->name('tuteurDasboard');
Route::get('/tuteur/dashboard/evaluation/etudiant', [TuteurController::class, 'tuteurEvalueEtudiant'])->name('tuteurEvalueEtudiant');
Route::post('/tuteur/dashboard/evaluation/etudiant', [TuteurController::class, 'traitementTuteurEvalueEtudiant'])->name('traitementTuteurEvalueEtudiant');
Route::get('/tuteur/dashboard/groupe', [TuteurController::class, 'tuteurCreeGroupe'])->name('tuteurCreeGroupe');
Route::post('/tuteur/dashboard/groupe', [TuteurController::class, 'traitementTuteurCreeGroupe'])->name('traitementTuteurCreeGroupe');
Route::get('/tuteur/dashboard/groupe/role', [TuteurController::class, 'tuteurAttribueRole'])->name('tuteurAttribueRole');
Route::post('/tuteur/dashboard/groupe/role', [TuteurController::class, 'traitementTuteurAttribueRole'])->name('traitementTuteurAttribueRole');
Route::get('/tuteur/dashboard/rapport', [TuteurController::class, 'tuteurRapport'])->name('tuteurRapport');
Route::post('/tuteur/dashboard/rapport', [TuteurController::class, 'traitementTuteurRapport'])->name('traitementTuteurRapport');


/* ---------- RESPONSABLE DU SERVICE STAGE ET EMPLOI ----------- */
Route::get('/internship/connexion', [InternshipController::class, 'index'])->name('connexion');
Route::get('/internship/inscription', [InternshipController::class,'inscription'])->name('inscription');
Route::post('/internship/inscription', [InternshipController::class,'traitementInscriptionInternship'])->name('traitementInscriptionInternship');
Route::get('/internship/liste', [InternshipController::class, 'listeInternship'])->name('listeInternship');
Route::get('/internship/dashboard', [InternshipController::class, 'internshipDashboard'])->name('internshiDashboard');
Route::get('/internship/dashboard/note', [InternshipController::class, 'internshipNoteTuteur'])->name('internshipNoteTuteur');
Route::post('/internship/dashboard/note', [InternshipController::class, 'traitementInternshipNoteTuteur'])->name('traitementInternshipNoteTuteur');
Route::get('/internship/dashboard/gere', [InternshipController::class, 'internshipGereTuteur'])->name('internshipGereTuteur');
Route::post('/internship/dashboard/gere', [InternshipController::class, 'traitementInternshipGereTuteur'])->name('traitementInternshipGereTuteur');

Route::get('/internship/dashboard/attribue', [InternshipController::class, 'internshipAttribueEtudiant'])->name('internshipAttribueEtudiant');
Route::post('/internship/dashboard/attribue', [InternshipController::class, 'traitementInternshipAttribueEtudiant'])->name('traitementInternshipAttribueEtudiant');


/* ---------- RESPONSABLE DE LA PÉDAGOGIE ----------- */
Route::get('/pedagogie/connexion', [PedagogyController::class, 'index'])->name('connexion');
Route::get('/pedagogie/inscription', [PedagogyController::class,'inscription'])->name('inscription');
Route::post('/pedagogie/inscription', [PedagogyController::class,'traitementInscriptionPedagogie'])->name('traitementInscriptionPedagogie');
Route::get('/pedagogie/liste', [PedagogyController::class, 'listePedagogie'])->name('listePedagogie');
Route::get('/pedagogie/dashboard', [PedagogyController::class, 'pedagogieDashboard'])->name('pedagogieDashboard');
Route::get('/pedagogie/dasboard/catégorie', [PedagogyController::class, 'catégoriePedagogie'])->name('catégoriePedagogie');
Route::get('/pedagogie/dasboard/grilles/etudiant', [PedagogyController::class, 'grilleEvaluationEtudiantParTuteur'])->name('grilleEvaluationEtudiantParTuteur');
Route::get('/pedagogie/dasboard/grille/tuteur', [PedagogyController::class, 'grilleEvaluationTuteurParEtudiant'])->name('grilleEvaluationTuteurParEtudiant');
Route::get('/pedagogie/dasboard/grilles/admin', [PedagogyController::class, 'grilleEvaluationTuteurParAdmin'])->name('grilleEvaluationTuteurParAdmin');
Route::get('/pedagogie/dasboard/grilles/groupe', [PedagogyController::class, 'grilleEvaluationTuteurParGroupe'])->name('grilleEvaluationTuteurParGroupe');