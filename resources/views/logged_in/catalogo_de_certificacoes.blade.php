@extends('template.base')

@section('head_local')

<style>

    .certificacoes-da-area{
        padding: 50px 0px 50px 0px;
    }

</style>

@endsection

@section('main')

<section>
    <div class="row">
        <div class="col-12 text-center">
            <h1><img src="/imagens/certificate.png" style="width: 64px; margin-right: 20px;" />Catálogo de Certificações</h1>
        </div>
    </div>

    <div class="certificacoes-da-area">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Suporte ao Cliente</h2>
                <hr />
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Gestão de Documentos Eletrônicos</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Se torne um especialista no sistema GED com ênfase em suporte ao cliente.</p>            
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Controlador Interno</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Se torne um especialista no sistema CI com ênfase em suporte ao cliente.</p>              
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="certificacoes-da-area">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Desenvolvimento de Softwares</h2>
            <hr />
        </div>
    </div>

    <div class="row  d-flex justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Gestão de Documentos Eletrônicos</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Se torne um especialista no sistema GED com ênfase em desenvolvimento.</p>            
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Controlador Interno</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Se torne um especialista no sistema CI com ênfase em desenvolvimento.</p>              
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="certificacoes-da-area">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Teste de Softwares</h2>
            <hr />
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Gestão de Documentos Eletrônicos</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Se torne um especialista no sistema GED com ênfase em testes.</p>            
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Controlador Interno</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Se torne um especialista no sistema CI com ênfase em testes.</p>              
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="certificacoes-da-area">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Gestão de Softwares</h2>
            <hr />
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Gestão de Documentos Eletrônicos</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Se torne um especialista no sistema GED com ênfase gerencial.</p>            
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Controlador Interno</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Se torne um especialista no sistema CI com ênfase gerencial.</p>              
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="certificacoes-da-area">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Operação de Softwares</h2>
            <hr />
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Gestão de Documentos Eletrônicos</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Se torne um especialista no sistema GED com ênfase operacional.</p>            
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header"><h5 class="card-title">Controlador Interno</h5></div>
                <div class="card-body">
                    <p class="card-text">Se torne um especialista no sistema CI com ênfase operacional.</p>              
                </div>
            </div>
        </div>
    </div>
    </div>    
</section>



@endsection
