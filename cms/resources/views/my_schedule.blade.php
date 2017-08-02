<!-- resources/views/my_schedule.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Bootstrap の定形コード... -->
    <div class="panel-body" onload="table_scroll()">
        <script type="text/javascript">
        $(function () {
            // 初期化処理
            $(document).ready(table_scroll);
        });
        /**
         * とりあえずセンタリング指定を試す
         **/
        function table_scroll() {
            
        var L = document.getElementById('LAYER');
        var T = L.getElementsByTagName('table')[0];
        L.scrollLeft =
        T.offsetLeft + (T.rows[0].cells[1].offsetLeft*54);
        }
        </script>
        <div class="table-responsive" id="LAYER">
        <table class="table table-bordered" style="font-size : 5px;">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>                
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td colspan="6" align="center">0:00</td>
                <td colspan="6" align="center">1:00</td>
                <td colspan="6" align="center">2:00</td>
                <td colspan="6" align="center">3:00</td>
                <td colspan="6" align="center">4:00</td>
                <td colspan="6" align="center">5:00</td>
                <td colspan="6" align="center">6:00</td>
                <td colspan="6" align="center">7:00</td>
                <td colspan="6" align="center">8:00</td>
                <td colspan="6" align="center">9:00</td>
                <td colspan="6" align="center">10:00</td>
                <td colspan="6" align="center">11:00</td>
                <td colspan="6" align="center">12:00</td>
                <td colspan="6" align="center">13:00</td>
                <td colspan="6" align="center">14:00</td>
                <td colspan="6" align="center">15:00</td>
                <td colspan="6" align="center">16:00</td>
                <td colspan="6" align="center">17:00</td>
                <td colspan="6" align="center">18:00</td>
                <td colspan="6" align="center">19:00</td>
                <td colspan="6" align="center">20:00</td>
                <td colspan="6" align="center">21:00</td>
                <td colspan="6" align="center">22:00</td>
                <td colspan="6" align="center">23:00</td>
            </tr>
            <tr>
                <td colspan="36" align="center">睡眠</td>
                <td colspan="108" align="center"></td>
            </tr>
            <tr>
                <td colspan="36" align="center">睡眠</td>
                <td colspan="3" align="center">朝食</td>
                <td colspan="3" align="center"></td>
                <td colspan="6" align="center">移動</td>
                <td colspan="80" align="center">仕事</td>
                <td colspan="16" align="center"></td>
            </tr>
        </table>
        
        </div>
    </div>
@endsection