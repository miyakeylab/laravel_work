<!-- resources/views/books.blade.php -->

@extends('layouts.app')

@section('content')
    
    <!-- Bootstrap の定形コード... -->
    
    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- 本登録フォーム -->
        <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- 本のタイトル -->
            <div class="form-group">
                <label for="book" class="col-sm-3 control-label">Book</label>
                
                <div class="col-sm-6">
                    <input type="text" name="item_name" id="book-name"class="form-control">
                </div>
            </div>
            
            <!-- 本 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus"></i> Save
                    </button>
                </div>
            </div>
        </form>
        @if (count($books) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">現在の本 </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead> 
                    <th>本一覧</th>
                    <th>ページ数</th>
                    <th>推定読書時間</td>
                    <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $book->item_name }}
                                </div>
                            </td>
                            <td>
                                ページ数
                            </td>
                            <td>
                                推定読書時間
                            </td>
                            <td>
                                <form action="{{ url('books/'.$book->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-success"> <i class="glyphicon glyphicon-save"></i> 
                                        スケジュール登録
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ url('books/'.$book->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"> <i class="glyphicon glyphicon-trash"></i> 
                                        削除
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
<!-- Book: 既に登録されてる本のリスト -->
    </div>
    
    <!-- Book: 既に登録されてる本のリスト -->
@endsection