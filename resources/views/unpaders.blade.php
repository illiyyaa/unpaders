@extends ('layouts.default')

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}

</style>

<script>
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>

@section ('content')
<div class="container">
    <div class="content">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h4 class="panel-title" style="text-align: left;">UNPADERS</h4>
                <div class="pull-right">
                    <button class="btn btn-style btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button>
                </div>
            </div>
            <br>
            <table class="table table-bordered table-hover">
            <thead>
                <tr class="filters">
                    <th></th>
                    <th></th>
                    <th><input type="text" class="form-control" placeholder="Nama" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Fakultas" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Angkatan" disabled></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="{{url('img/unpaders/aan.jpg')}}"></td>
                    <td>AAN KUSYADI</td>
                    <td>PETERNAKAN</td>
                    <td>2007</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="{{url('img/unpaders/abdi.jpg')}}"></td>
                    <td>ABDIANSYAH PRAHASTO</td>
                    <td>EKONOMI & BISNIS</td>
                    <td>2005</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="{{url('img/unpaders/acep.jpg')}}"></td>
                    <td>ACEP SUHENDI</td>
                    <td>PETERNAKAN</td>
                    <td>2004</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="{{url('img/unpaders/adang.jpg')}}"></td>
                    <td>ADANG GUMILAR</td>
                    <td>ILMU KOMUNIKASI</td>
                    <td>1978</td>
                </tr>
                    <tr>
                    <td>5</td>
                    <td><img src="{{url('img/unpaders/ade.jpg')}}"></td>
                    <td>ADE CHAIDIR</td>
                    <td>MATEMATIKA & IPA</td>
                    <td>1994</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection