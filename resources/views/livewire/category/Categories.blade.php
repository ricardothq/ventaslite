<div class="row sales layout-top-spacing">

    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="car-title">
                    <b>{{$componentName}} | {{$pageTitle}}</b>
                </h4>
                <ul class="tabs tab-pills">
                    <li>
                        <a href="javascript:void(0)" class="tabmenu bg-dark" data-toggle="modal" data-target="#theModal">Agregar</a>
                    </li>
                </ul>
            </div>
            Search
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table striped mt-1">
                        <thead class="text-white" style="background: #3B3F5C">
                            <tr>
                                <th class="table-th text-white">DESCRIPCION</th>
                                <th class="table-th text-white text-center">IMAGEN</th>
                                <th class="table-th text-white text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td><h6>{{$category->name}}</h6> </td>
                                <td class="text-center">
                                    <span>
                                        <img src="{{asset('storage/categories/' .$category->image)}}" alt="imagen de ejemplo" height="70" width="80" class="rounded"
                                        >
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)"
                                    wire:click="Edit({{$category->id}})"
                                    class="btn btn-dark mtmobile" title="Edit">
                                        <i class="fas fa-edit"></i>

                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    </a>
                                    <a href="javascript:void(0)" 
                                    onclick="Confirm('{{$category->id}}')"
                                    class="btn btn-dark" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    Pagintion
                </div>
            </div>
        </div>



    </div>
Include Form
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){

    });
</script>
