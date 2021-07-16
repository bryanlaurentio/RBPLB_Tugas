
<div class="header pb-8 bg-gradient-primary pt-5">
    <div class="container-fluid">
        <div class="header-body">
            <h1 style="text-align: center; color: white; font-size:50px"> Welcome to Profit.In</h1>
            <h1 style="text-align: center; color: white"> Cari Cuan Bersama-sama! </h1> <br>
            <h2 style="text-align: center; color: white">
                Profit.In diharapkan dapat membantu user untuk mendapatkan pengetahuan, relasi, dan informasi yang dapat berguna untuk pengambilan keputusan di dunia investasi.
                <br>Tujuan dari layanan ini dibuat yaitu kami ingin menghubungkan masyarakat yang tertarik dalam bidang investasi.
            </h2><br>
            <div style="text-align: center">
                <a class="nav-link" href="{{ route('materials') }}">
                    <button type="button" class="btn btn-neutral  btn-lg">{{ __('Belajar Sekarang!') }}</button>
                </a>
            </div>
            <br>
            <h1 style="text-align: center; color: white; font-size:30px"> Apa Kata Mereka? </h1><br>
            <!-- Card stats -->
            <div class="card-body">
                <div class="row icon-examples">
                    <div class="col-lg-4 col-md-100">
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                            <img src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg" class="rounded-circle">
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br><br><br> <br><br>
                            <h3 style="text-align:center">Riki Indramawan <br> Tutor</h3>
                            <h4 style="text-align:justify">Belajar investasi di Profit.In sangat dianjurkan, dikarenakan terdapat materi yang sesuai dengan kebutuhan kalian, bisa diskusi dengan teman-teman yang lain, serta ada sesi mentoring di live tutor!<h4>
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-100">
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                            <img src="{{ asset('argon') }}/img/theme/team-2-800x800.jpg" class="rounded-circle">
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br><br><br> <br><br>
                            <h3 style="text-align:center">Egy Kelok Sembilan<br> Membership</h3>
                            <h4 style="text-align:justify">Dulu sebelum gw mengenal Profit.In porto selalu merah, bahkan pernah -40%. Semenjak gw kenal sebuah platform yang bernama Profit.In, porto gw selalu hijau, profit teruss!! Terimakasih Profit.In!<h4>
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-100">
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                            <img src="{{ asset('argon') }}/img/theme/team-3-800x800.jpg" class="rounded-circle">
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br><br><br> <br><br>
                            <h3 style="text-align:center">Kevin Gideon <br> Membership</h3>
                            <h4 style="text-align:justify">Belajar investasi di Profit.In keren poll! Disini kita bisa berdiskusi bareng temen temen yang lain, bahkan ada yang dari luar negeri jugaa. Kita dibimbing dengan tutor-tutor yang berpengalaman<h4>
                        </button>
                    </div>
                </div>
              </div><br>
              <h2 style="text-align: center; color: white; font-size:30px"> Contoh Materi </h2>
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
                        @if(Auth::user()->role == "Tutor" || Auth::user()->role == "Admin")
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <form action="{{ route('materials.displayHalamanEditMateri', $m->codeOfMaterial)}}">
                                @csrf
                                <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Edit" />
                            </form>
                            <span>&nbsp &nbsp</span>
                            <form action="{{ route('materials.deleteMaterial', $m->codeOfMaterial)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-icon btn-3 btn-primary" onclick="return confirm('Apakah anda yakin ingin menghapus materi {{$m->titleOfMaterial}}?')" type="submit" value="Delete" />
                            </form>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
              </div>
              <br><br>
              <h2 style="text-align: center ; color: white; font-size:30px"> Topik Diskusi </h2>
              <br><table class="table align-items-center table-light text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="color: white">Name Of Topic</th>
                        <th scope="col" style="color: white">Category Of Topic</th>
                        <th scope="col" style="color: white">Option</th>
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
                                    @if(Auth::user()->role == "Tutor" || Auth::user()->role == "Admin")
                                    <a href="forumDiskusi/editTopikDiskusi/{{ $dt->codeOfTopic }}">
                                        <button class="btn btn-warning btn-sm" type="button">Edit</button>
                                    </a>
                                    @endif
                                    @if(Auth::user()->role == "Tutor" || Auth::user()->role == "Admin")
                                    <a href="forumDiskusi/delete/{{ $dt->codeOfTopic }}">
                                        <button class="btn btn-danger btn-sm" type="button">Hapus</button>
                                    </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
            <h2 style="text-align: center; color: white; font-size:30px"> Live Tutor </h2>
            <div class="card-body">
                <div class="row icon-examples">
                    @foreach($LiveTutor as $lt)
                    <div class="col-lg-12 col-md-100">
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40" onclick= "location.href='{{ route('liveTutor.displayHalamanDetailLiveTutor', $lt->codeLiveTutor) }}'">
                            <div>
                                <i class="ni ni-chart-bar-32"></i>
                                 <span><h3>{{ $lt->nameOfLiveTutor }}</h3></span>
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
                        @if(Auth::user()->role == "Tutor" || Auth::user()->role == "Admin")
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <form action="{{ route('liveTutor.displayHalamanEditLiveTutor', $lt->codeLiveTutor)}}">
                                @csrf
                                <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Edit" />
                            </form>
                            <span>&nbsp &nbsp</span>
                            <form action="{{ route('liveTutor.deleteLiveTutor', $lt->codeLiveTutor)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Delete" />
                            </form>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
              </div>
        </div>
    </div>
</div>

