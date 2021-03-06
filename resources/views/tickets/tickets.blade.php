@extends('layouts.app')
@section('content')

<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Tickets of order 50000004</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2">
        <a href="{{ route('createticket') }}" class="text-success">
          <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
        </a>
      </span>
      <table id="dtBasicExample" class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th class="text-center">ticketNumber</th>
            <th class="text-center">type</th>
            <th class="text-center">passenger_name</th>
            <th class="text-center">destination</th>
            <th class="text-center">tran_company</th>
            <th class="text-center">rsoom</th>
            <th class="text-center">asasy</th>
            <th class="text-center">total</th>
            <th class="text-center">comission</th>
            <th class="text-center">comissionTax</th>
            <th class="text-center">BSP</th>
            <th class="text-center">sellprice</th>
            <th class="text-center">profit</th>
            <th class="text-center">safy</th>
            <th class="text-center">paymentType</th>
            <th class="text-center">Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3-half">1</td>
            <td class="pt-3-half">100000001</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">500 LE</td>
            <td class="table-remove">
              <button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
            </td>
          </tr>
          <tr>
            <td class="pt-3-half">2</td>
            <td class="pt-3-half">100000002</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">1500 LE</td>
            <td class="table-remove">
              <button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
            </td>
          </tr>
          <tr>
            <td class="pt-3-half">3</td>
            <td class="pt-3-half">100000003</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">-2500 LE</td>
            <td class="table-remove">
              <button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
            </td>
          </tr>
          <tr>
            <td class="pt-3-half">4</td>
            <td class="pt-3-half">100000004</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">0 LE</td>
            <td class="table-remove">
              <button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
            </td>
          </tr>
          <tr>
            <td class="pt-3-half">5</td>
            <td class="pt-3-half">100000005</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">320 LE</td>
            <td class="table-remove">
              <button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
            </td>
          </tr>

          <!-- This is our clonable table line -->
          <tr class="hide">
            <td class="pt-3-half">6</td>
            <td class="pt-3-half">100000006</td>
            <td class="pt-3-half" contenteditable="true">Mark Gallagher</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">600 LE</td>
            <td class="table-remove">
              <button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
            </td>
          </tr>
        </tbody>
      </table>
      <button type="button" class="btn btn-info btn-rounded btn-md float-right">Save</button>
    </div>
  </div>
</div>
<!-- Editable table -->


<script>
window.onload = function () {

  const $tableID = $('#table');

  const newTr = `
  <tr class="hide">
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="table-remove">
  <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button>
  </td>
  </tr>`;


  $(document).ready(function () {
    $('#dtBasicExample').DataTable(
      {
        "scrollX": true,
      }
    );
    $('.dataTables_length').addClass('bs-select');
  });


  $tableID.on('click', '.table-remove', function () {
    $(this).parents('tr').detach();
  });

  // $tableID.on('click', '.table-view', function () {
  //   alert("view page ISA");
  //   // $(this).parents('tr').detach();
  // });

}




</script>
@endsection
