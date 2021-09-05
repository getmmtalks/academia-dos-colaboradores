@extends('template.base')

@section('head_local')

<style>

    .certificacoes-da-area{
        padding: 50px 0px 50px 0px;
    }

    p span.points-atual{
        color: #08E900;
    }

    p span.points-total{
        color: #C8C8C8;
    }

</style>

@endsection

@section('main')

<section>
    
<div class="row">

    <div class="col-4">
        <img src="/upload/imagens/smile-2072907_640.jpg" class="img-fluid" />
    </div>

    <div class="col-8">
        <hgroup>
        <h1>Ana Maria</h1>
        <p><i>Especialista em Suporte ao Cliente com ênfase em GED, há 2 anos.</i></p>
        <hr />
        </hgroup>

        <div>
            <p>
                <b>Points atual</b><br />
                <sub><a href="">Clique aqui</a> para saber como conquistar mais points.</sub>
            </p>
            <p>
                <span class="points-atual">980</span><span class="points-total">/1000</span>
            </p>
        </div>
        
        <div>
            <p>
                <b>Emblemas</b><br />
                <sub><a href="">Clique aqui</a> para saber como conquistar novos emblemas.</sub>
            </p>
            <p>
                <span>
                    <img src="/imagens/emblemas/check.png" />
                </span>
                <span>
                    <img src="/imagens/emblemas/planning.png" />
                </span>
            </p>
        </div>

    </div>

</div>

</section>



@endsection
