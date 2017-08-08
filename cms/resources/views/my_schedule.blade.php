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
                <?php for ($i=0;$i<144;$i++): ?>
                <th></th>
                <?php endfor;?>
            </tr>
            <tr>
                <?php for ($i=0;$i<24;$i++): ?>
                <td colspan="6" align="center"><?=$i?>:00</td>
                <?php endfor;?>
            </tr>
            <tr>
                <td class="info" colspan="36" align="center">睡眠</td>
                <td colspan="108" align="center"></td>
            </tr>
            <tr>
                <td class="info" colspan="36" align="center">睡眠</td>
                <td colspan="3" align="center">朝食</td>
                <td colspan="3" align="center"></td>
                <td colspan="6" align="center">移動</td>
                <td class="danger" colspan="80" align="center">仕事</td>
                <td colspan="16" align="center"></td>
            </tr>
                        <tr>
                <td class="info" colspan="36" align="center">睡眠</td>
                <td colspan="108" align="center"></td>
            </tr>
            <tr>
                <td  class="info" colspan="36" align="center">睡眠</td>
                <td colspan="3" align="center">朝食</td>
                <td colspan="3" align="center"></td>
                <td colspan="6" align="center">移動</td>
                <td class="danger" colspan="80" align="center">仕事</td>
                <td colspan="16" align="center"></td>
            </tr>
                        <tr>
                <td class="info" colspan="36" align="center">睡眠</td>
                <td colspan="108" align="center"></td>
            </tr>
            <tr>
                <td class="info" colspan="39" align="center">睡眠</td>
                <td colspan="3" align="center"></td>
                <td colspan="6" align="center">移動</td>
                <td class="danger" colspan="80" align="center">仕事</td>
                <td colspan="16" align="center"></td>
            </tr>
                        <tr>
                <td class="info" colspan="36" align="center">睡眠</td>
                <td colspan="108" align="center"></td>
            </tr>
            <tr>
                <td class="info" colspan="36" align="center">睡眠</td>
                <td colspan="3" align="center">朝食</td>
                <td colspan="3" align="center"></td>
                <td colspan="6" align="center">移動</td>
                <td class="danger" colspan="80" align="center">仕事</td>
                <td colspan="16" align="center"></td>
            </tr>
        </table>
        
        </div>
    </div>
@endsection