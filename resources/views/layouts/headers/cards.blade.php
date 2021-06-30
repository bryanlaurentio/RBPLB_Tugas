
<div class="header pb-8 bg-gradient-primary pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <h1 style="text-align: center"> Welcome to Profit.In </h1>
            <h1 style="text-align: center"> Cari Cuan Bersama-sama! </h1>

            <h2 style="text-align: center"> Berikut adalah materi yang tersedia! </h2>
            <!-- Card stats -->
            <div class="card-body">
                <div class="row icon-examples">
                    @foreach($materials as $m)
                    <div class="col-lg-4 col-md-100">
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40" onclick= "location.href='{{ route('materials.displayHalamanDetailMateri', $m->codeOfMaterial) }}'">
                            <div>
                                <i class="ni ni-chart-bar-32"></i>
                                 <span><h3>Judul: {{ $m->titleOfMaterial }}</h3></span>
                            </div>
                            <div class = "col">
                                <span><br></span>
                            </div>
                            <div class = "col">
                                <h5>Tutor: {{ $m->nameOfTutor }} </h4>
                            </div>
                            <div class = "col">
                                <h5>Kategori: {{ $m->categoryMaterial }}</h4>
                            </div>
                        </button>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <form action="{{ route('materials.displayHalamanEditMateri', $m->codeOfMaterial)}}">
                                @csrf
                                <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Edit" />
                            </form>
                            <span>&nbsp &nbsp</span>
                            <form action="{{ route('materials.deleteMaterial', $m->codeOfMaterial)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Delete" />
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
              </div>
              <br><br>
              <h2 style="text-align: center"> Berikut adalah topik diskusi yang tersedia! </h2>
              <table class="table align-items-center table-dark text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name Of Topic</th>
                        <th scope="col">Category Of Topic</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($discussion_topics as $dt)
                        <tr>
                            <td>
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{ $dt->nameOfTopic }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{ $dt->categoryOfTopic }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="/forumDiskusi/topikDiskusi/{{ $dt->codeOfTopic }}">
                                        <button class="btn btn-primary btn-sm" type="button">Masuk</button>
                                    </a>
                                    <a href="forumDiskusi/editTopikDiskusi/{{ $dt->codeOfTopic }}">
                                        <button class="btn btn-warning btn-sm" type="button">Edit</button>
                                    </a>
                                    <a href="forumDiskusi/delete/{{ $dt->codeOfTopic }}">
                                        <button class="btn btn-danger btn-sm" type="button">Hapus</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
            <h2 style="text-align: center"> Berikut adalah live tutor yang tersedia! </h2>
            <div class="card-body">
                <div class="row icon-examples">
                    @foreach($LiveTutor as $lt)
                    <div class="col-lg-12 col-md-100">
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40">
                            <div>
                                <i class="ni ni-chart-bar-32"></i>
                                 <span><h3>Judul: {{ $lt->nameOfLiveTutor }}</h3></span>
                            </div>
                            <div class = "col">
                                <span><br></span>
                            </div>
                            <div class = "col">
                                <h5>Tutor: {{ $lt->nameOfTutorInLiveTutor }} </h4>
                            </div>
                            <div class = "col">
                                <h5>Status: {{ $lt->statusLiveTutor }}</h4>
                            </div>
                        </button>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <form action="{{ route('materials.displayHalamanEditMateri', $lt->codeLiveTutor)}}">
                                @csrf
                                <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Edit" />
                            </form>
                            <span>&nbsp &nbsp</span>
                            <form action="{{ route('materials.deleteMaterial', $lt->codeLiveTutor)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Delete" />
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
              </div>
        </div>
    </div>
</div>

