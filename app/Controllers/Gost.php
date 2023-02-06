<?php namespace App\Controllers;

use App\Models\PitanjeModel;
use App\Models\Pitanje2Model;
use App\Models\UpitModel;
use App\Models\AdminModel;

use CodeIgniter\I18n\Time;


class Gost extends BaseController {
    
    public function index() {
        $this->session->set('administrator', NULL);
        return view('stranice/gost/index');
    }
    public function proizvodi() {
        $this->session->set('administrator', NULL);
        return view('stranice/gost/proizvodi');
    }
    public function upit() {
        $this->session->set('administrator', NULL);
        return view('stranice/gost/upit');
    }
    public function o_nama() {
        $this->session->set('administrator', NULL);
        return view('stranice/gost/o_nama');
    }
    public function kontakt(){
        $this->session->set('administrator', NULL);
        return view('stranice/gost/kontakt');
    }
    public function prijava(){
        $this->session->set('administrator', NULL);
        if($this->request->getVar('username') == "" && $this->request->getVar('password') == ""){
            return view('stranice/gost/login');
        }
        else{
            $adminModel = new AdminModel();
            $admin = $adminModel->where('username', $this->request->getVar('username'))->first();
            if ($admin != null) {
                if ($admin->password != $this->request->getVar('password')) {
                    return view('stranice/gost/login', ['poruka'=>'Pogresna lozinka!']);
                }
                $this->session->set('administrator', $admin);
                $upitModel = new UpitModel();
                $upiti = $upitModel->where("odgovor", false)->findAll();
                $pitanjeModel = new PitanjeModel();
                $pitanja = $pitanjeModel->where("odgovor", false)->findAll();
                $pitanje2Model = new Pitanje2Model();
                $pitanja2 = $pitanje2Model->where("odgovor", false)->findAll();
                return view('stranice/gost/admin', ['upiti'=>$upiti, 'pitanja'=>$pitanja, 'pitanja2'=>$pitanja2]);
            }
            return view('stranice/gost/login', ['poruka'=>'Nepostojeci administrator!']);
        }
    }
   
    public function odjava(){
        $this->session->set('administrator', NULL);
        return view('stranice/gost/login');
    }


    public function neodgovoreniUpiti(){
        if($this->session->get('administrator') == null){
            return view('stranice/gost/login');
        }
        else{
            $upitModel = new UpitModel();
            $upiti = $upitModel->where("odgovor", false)->findAll();
            $pitanjeModel = new PitanjeModel();
            $pitanja = $pitanjeModel->where("odgovor", false)->findAll();
            $pitanje2Model = new Pitanje2Model();
            $pitanja2 = $pitanje2Model->where("odgovor", false)->findAll();
            return view('stranice/gost/admin', ['upiti'=>$upiti, 'pitanja'=>$pitanja, 'pitanja2'=>$pitanja2]);
        }
    }
    public function odgovoreniUpiti(){
        if($this->session->get('administrator') == null){
            return view('stranice/gost/login');
        }
        else{
            $upitModel = new UpitModel();
            $upiti = $upitModel->where("odgovor", true)->findAll();
            $pitanjeModel = new PitanjeModel();
            $pitanja = $pitanjeModel->where("odgovor", true)->findAll();
            $pitanje2Model = new Pitanje2Model();
            $pitanja2 = $pitanje2Model->where("odgovor", true)->findAll();
            return view('stranice/gost/odgovoreni_upiti', ['upiti'=>$upiti, 'pitanja'=>$pitanja, 'pitanja2'=>$pitanja2]);
        }
    }


    public function PostavljanjePitanja2(){
        $this->session->set('administrator', NULL);
        $current_time = new Time('now', 'Europe/Belgrade', 'en_US');
        $pitanje2Model=new Pitanje2Model();
        $pitanje2Model->save([
            'email'=>$this->request->getVar('email'),
            'pitanje'=>$this->request->getVar('pitanje'),
            'odgovor'=>false,
            'vreme'=>$current_time,
        ]);
        return view('stranice/gost/index');
    }

    public function PostavljanjePitanja(){
        $this->session->set('administrator', NULL);
        $greska = "";
        if($this->request->getVar('ime') == null){
            $greska = "Unesite Vase ime";
            return view('stranice/gost/kontakt', ['greska'=>$greska]);
        }
        if($this->request->getVar('prezime') == null){
            $greska = "Unesite Vase prezime";
            return view('stranice/gost/kontakt', ['greska'=>$greska]);
        }
        if($this->request->getVar('email') == null){
            $greska = "Unesite Vas email";
            return view('stranice/gost/kontakt', ['greska'=>$greska]);
        }
        if($this->request->getVar('pitanje') == null){
            $greska = "Unesite Vase pitanje";
            return view('stranice/gost/kontakt', ['greska'=>$greska]);
        }
        $current_time = new Time('now', 'Europe/Belgrade', 'en_US');
        $pitanjeModel=new PitanjeModel();
        $pitanjeModel->save([
            'ime'=>$this->request->getVar('ime'),
            'prezime'=>$this->request->getVar('prezime'),
            'email'=>$this->request->getVar('email'),
            'pitanje'=>$this->request->getVar('pitanje'),
            'odgovor'=>false,
            'vreme'=>$current_time,
        ]);
        return view('stranice/gost/kontakt');
    }

    public function PostavljanjeUpita(){
        $this->session->set('administrator', NULL);
        $greska = "";
        if($this->request->getVar('ime') == null){
            $greska = "Unesite Vase ime";
            return view('stranice/gost/upit', ['greska'=>$greska]);
        }
        if($this->request->getVar('prezime') == null){
            $greska = "Unesite Vase prezime";
            return view('stranice/gost/upit', ['greska'=>$greska]);
        }
        if($this->request->getVar('email') == null){
            $greska = "Unesite Vas email";
            return view('stranice/gost/upit', ['greska'=>$greska]);
        }
        if($this->request->getVar('marka') == null){
            $greska = "Unesite marku Vaseg automobila";
            return view('stranice/gost/upit', ['greska'=>$greska]);
        }
        if($this->request->getVar('model') == null){
            $greska = "Unesite model Vaseg automobila";
            return view('stranice/gost/upit', ['greska'=>$greska]);
        }
        if($this->request->getVar('godiste') == null){
            $greska = "Unesite godiste Vaseg automobila";
            return view('stranice/gost/upit', ['greska'=>$greska]);
        }
        if($this->request->getVar('kubikaza') == null){
            $greska = "Unesite kubikaza Vaseg automobila";
            return view('stranice/gost/upit', ['greska'=>$greska]);
        }
        if($this->request->getVar('tekst') == null){
            $greska = "Unesite tekst Vaseg upita";
            return view('stranice/gost/upit', ['greska'=>$greska]);
        }
       
        $current_time = new Time('now', 'Europe/Belgrade', 'en_US');
        $upitModel=new UpitModel();
        $upitModel->save([
            'ime'=>$this->request->getVar('ime'),
            'prezime'=>$this->request->getVar('prezime'),
            'email'=>$this->request->getVar('email'),
            'marka'=>$this->request->getVar('marka'),
            'model'=>$this->request->getVar('model'),
            'godiste'=>$this->request->getVar('godiste'),
            'kubikaza'=>$this->request->getVar('kubikaza'),
            'tekst'=>$this->request->getVar('tekst'),
            'odgovor'=>false,
            'vreme'=>$current_time,
        ]);
        return view('stranice/gost/upit');
    }
    
    public function pregledUpit($idU){
        if($this->session->get('administrator') == null){
            return view('stranice/gost/login');
        }
        else{
            $upitModel = new UpitModel();
            $upit = $upitModel->where("idU", $idU)->first();
            return view('stranice/gost/pregled_upita', ['upit'=>$upit]);
        }
    }

    public function pregledPitanje($idK){
        if($this->session->get('administrator') == null){
            return view('stranice/gost/login');
        }
        else{
            $pitanjeModel = new PitanjeModel();
            $pitanje = $pitanjeModel->where("idK", $idK)->first();
            return view('stranice/gost/pregled_pitanja', ['pitanje'=>$pitanje]);
        }
    }

    public function pregledPitanje2($idK){
        if($this->session->get('administrator') == null){
            return view('stranice/gost/login');
        }
        else{
            $pitanjeModel2 = new Pitanje2Model();
            $pitanje2 = $pitanjeModel2->where("idK", $idK)->first();
            return view('stranice/gost/pregled_pitanja2', ['pitanje2'=>$pitanje2]);
        }
    }

    public function promeniOdgovorUpita($idU){
        if($this->session->get('administrator') == null){
            return view('stranice/gost/login');
        }
        else{
            $upitModel = new UpitModel();
            $upit = $upitModel->where("idU", $idU)->first();
            $odgovor = $upit->odgovor;
            $inverzanOdgovor = !$odgovor; 
            $data = [
                'ime'=>$upit->ime,
                'prezime'=>$upit->prezime,
                'email'=>$upit->email,
                'marka'=>$upit->marka,
                'model'=>$upit->model,
                'godiste'=>$upit->godiste,
                'kubikaza'=>$upit->kubikaza,
                'tekst'=>$upit->tekst,
                'odgovor'=>$inverzanOdgovor,
                'vreme'=>$upit->vreme,
            ];

            $upitModel->update($idU, $data);
            return $this->neodgovoreniUpiti();
        }
    }

    public function promeniOdgovorPitanja($idK){
        if($this->session->get('administrator') == null){
            return view('stranice/gost/login');
        }
        else{
            $pitanjeModel = new PitanjeModel();
            $pitanje = $pitanjeModel->where("idK", $idK)->first();
            $odgovor = $pitanje->odgovor;
            $inverzanOdgovor = !$odgovor; 
            $data = [
                'ime'=>$pitanje->ime,
                'prezime'=>$pitanje->prezime,
                'email'=>$pitanje->email,
                'pitanje'=>$pitanje->pitanje,
                'odgovor'=>$inverzanOdgovor,
                'vreme'=>$pitanje->vreme,
            ];

            $pitanjeModel->update($idK, $data);
            return $this->neodgovoreniUpiti();
        }
    }

    public function promeniOdgovorPitanja2($idK){
        if($this->session->get('administrator') == null){
            return view('stranice/gost/login');
        }
        else{
            $pitanjeModel2 = new Pitanje2Model();
            $pitanje2 = $pitanjeModel2->where("idK", $idK)->first();
            $odgovor = $pitanje2->odgovor;
            $inverzanOdgovor = !$odgovor; 
            $data = [
                'email'=>$pitanje2->email,
                'pitanje'=>$pitanje2->pitanje,
                'odgovor'=>$inverzanOdgovor,
                'vreme'=>$pitanje2->vreme,
            ];

            $pitanjeModel2->update($idK, $data);
            return $this->neodgovoreniUpiti();
        }
    }
    
}