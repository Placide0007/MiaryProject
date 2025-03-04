
@extends('base')

@section('title', 'mode premium')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 py-3 border vh-100 px-3 bg-white">
            <div>
                <h1 class="display-6 text-success text-center" >Raha mila fampiofanana  misimisy kokoa amin'ireo karazana fambolena dia afaka mitsidika ato amin'ny sarany mora dia mora</h1>
                <p class="lead fw-bold" >Ireto avy no hita ao anatin'izany:</p>
                <ul>
                    <li>Video ahafahana mijery misimisy kokoa</li>
                    <li>Taratasy afaka sintomina mikasika ny voly rehetra</li>
                    <li>Fampiofanana en ligne miaraka  amn'ireo teknisianina</li>
                </ul>
                <p class="fw-bold text-primary" >
                    Ireo Rehetra ireo dia amin'ny sarany 50.000Ar na (250.000fmg)
                </p>
            </div>
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h1>Fomba fandoavam-bola</h1>
                <select class="form-control mb-3"   name="" id="">
                    <option value="Mvola">Mvola</option>
                    <option value="Orange Money">Orange Money</option>
                    <option value="Orange Money">Airtel Money</option>
                </select>
                <input type="text" class="form-control mb-3" placeholder="Numero de telephone"  type="number" >
                <input type="submit"  class="form-control bg-success text-light" value="Hitsidika" >
            </form>
        </div>
    </div>
@endsection
