

@section('content')
<div class="container">
    <div class="row justify-content-left">


шаблон админа
    @if(isset($age))
        <form method="POST" action="{{route('admin')}}">
        @csrf
        <div id="left" class="btn-group" role="group" aria-label="Basic example">
            @foreach($age as $ages)            
                <button type="sibmit" class="btn btn-outline-success" name="age1" value="{{$ages->id}}">{{$ages->name}}</button>
            @endforeach
            </div>

            <div id="left1" class="btn-group" role="group" aria-label="Basic example">
                     
                <button type="sibmit" class="btn btn-outline-success" name="genter" value="М">М</button>
                <button type="sibmit" class="btn btn-outline-success" name="genter" value="Ж">Ж</button>
            </div>
       
            <div class="btn-group" role="group" aria-label="Basic example">
            @foreach($age as $ages)            
                <button type="sibmit" class="btn btn-outline-success" name="age" value="{{$ages->id}}">{{$ages->name}}</button>
            @endforeach
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
            @foreach($age as $ages)            
                <button type="sibmit" class="btn btn-outline-success" name="age" value="{{$ages->id}}">{{$ages->name}}</button>
            @endforeach
            </div>
        </form>
    @endif
 
        <div class="col-md-12">
        
            <div class="card">

            
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello admin
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
