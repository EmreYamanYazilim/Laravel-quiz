<x-app-layout>
    <x-slot name="header">Quizler</x-slot>


    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('quizzes.create')}}" class="btn btn-sm btn-primary">quiz oluştur </a>
            </h5>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">quiz</th>
                    <th scope="col">durum</th>
                    <th scope="col">bitiş tarihi</th>
                    <th scope="col">işlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quizzes as $quiz)
                <tr>
                    <th>{{$quiz->title}}</th>
                    <td>{{$quiz->status}}</td>
                    <td>{{$quiz->finished_at}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">ekle</a>
                        <a href="#" class="btn btn-sm btn-danger">sil</a>
                    </td>
                </tr>


                @endforeach
                </tbody>
            </table>
        {{$quizzes->links()}}
        </div>
    </div>
</x-app-layout>
