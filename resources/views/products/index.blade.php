@extends('layouts.app')

@section('title', 'Produtos')

@section('content_header')
    @include('helpers.flash-message')
    <h1>Produtos</h1>
@stop

@section('content')
    <div class="box box-primary col-md-8 container">
        <div class="box-header with-border ">
            <div class="float-right ">
                <a class="btn btn-sm btn-primary" href="{{ route('products.create') }}">Cadastrar Produto</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Quantidade</th>
                        <th class="text-center">Fornecedor</th>
                        <th class="text-center">Marca</th>
                        <th class="text-center">Usuário</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr class="text-center">
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->amount }}</td>
                        <td>{{ $product->vendor }}</td>
                        <td>{{ $product->brand }}</td>
                        <td>{{ optional($product->user)->name }}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $product->id) }}">
                                Editar
                            </a>
                            <a class="btn btn-sm btn-danger product-destroy" data-id="{{ $product->id }}">
                                Excluir
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
            {{ $products->links() }}
        </div>
    </div>
@stop

@section('js')
    <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function destroy() {
            var productId = $(this).data('id');

            swal("Confirma a exclusão do produto?", {
                buttons: {
                    cancel: "Cancelar",
                    catch: {
                        text: "Confirmar",
                        value: "confirm",
                    },
                },
            }).then((value) => {
                switch (value) {
                    case "confirm":
                        $.ajax({
                            url: '{{ route('products.destroy', '_product') }}'.replace('_product', productId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Produto deletado", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                swal("Falha!", "Produto não pôde ser excluído", "error");
                            }
                        });
                        break;
                    default:
                        swal("Operação cancelada!");
                }
            });
        }

        $('.product-destroy').on('click', function () {
            var productId = $(this).data('id');

            swal("Confirma a exclusão do produto?", {
                buttons: {
                    cancel: "Cancelar",
                    catch: {
                        text: "Confirmar",
                        value: "confirm",
                    },
                },
            }).then((value) => {
                switch (value) {
                    case "confirm":
                        $.ajax({
                            url: '{{ route('products.destroy', '_product') }}'.replace('_product', productId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Produto deletado", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                swal("Falha!", "Produto não pôde ser excluído", "error");
                            }
                        });
                        break;
                    default:
                        swal("Operação cancelada!");
                }
            });
        })
    </script>
@endsection
