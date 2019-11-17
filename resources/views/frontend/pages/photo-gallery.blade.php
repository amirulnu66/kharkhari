@extends('frontend.master')

@section('title')

@section('contant')

                <header class="page-heading clearfix">
                 <h1 class="heading-title pull-left">
                  ফটো গ্যালারি
                 </h1>           
                 <div class="breadcrumbs pull-right">                       
                      <ul>
                          <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                          <li> ক্যাম্পাস   <i class="fa fa-angle-right"></i> </li>
                          <li class="current">  ফটো গ্যালারি</li>
                           
                      </ul>  
                 </div>
                </header>
                
                <div class="col-md-12 col-sm-12">   
                  <div class="row">

                        <div id="MainContent_ImageGalleryListView_lstProducts" class="container">
                          <div class="row">
                      <!-- this photoGallery() method get form helpers.php -->

                           @if(!empty(photoGallery() AND photoGallery()->count()>0))
                              @foreach(photoGallery() as $singlePhoto)
                            <div class="col-md-3 col-sm-6 col-xs-12 gallery-inner">
                                <div class="gallery-bg">
                                <a href="#">
                                <img class="img-responsive" data-toggle="modal" data-target="#myModal4{{$singlePhoto->id}}" src="{{url('assets/galleries/'.$singlePhoto->gallery_image)}}" alt="photo" width="320" height="250">
                                </a>
                                <p class="gallery-img-title">{{$singlePhoto->photo_title}} </p>
                                </div>
                              </div>
                              @endforeach
                           @endif
                            </div>
                          <div class="row">
                             <!-- Modal -->
                          @if(!empty(photoGallery() AND photoGallery()->count()>0))
                             @foreach(photoGallery() as $singlePhoto)
                                   
                              <div class="modal fade" id="myModal4{{$singlePhoto->id}}" role="dialog">
                                <div class="modal-dialog">
                                  <!-- Modal content-->
                                  <div class="modal-content btn-area" id="">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                    <div class="modal-body">
                                     <img class="img-responsive" src="{{url('assets/galleries/'.$singlePhoto->gallery_image)}}" width="500px">
                                    </div>
                                    <div class="modal-footer">
                                    <p class="text-center"> {{$singlePhoto->photo_title}} </p>
                                    </div>
                                  </div>
                                
                                </div>
                              </div>

                                  @endforeach
                              @endif
                                         
                          </div>  
                          {{ photoGallery()->links() }}
                           </div>
                        </div>
                        <div class="clearfix"></div><br>

					</div>


@stop