 {{-- Courses section --}}
 <section>
     <div class="container-fluid">
         <div class="row">
             <h1 class="text-center my-5 text-warning">All Courses</h1>
         </div>
         <div class="row d-flex justify-content-center">
             <p class="text-center">
                 Develop essential skills in programming and web development,
                 preparing you for success in the fast-paced tech industry.
                 {{-- <span class="text-warning">Explore Courses.</span> --}}
             </p>
         </div>
         <div class="row d-flex justify-content-center">

             @forelse ($courses as $course)
                 <div class="card m-2 fade-in" style="width: 20rem;">
                     <img class="card-img-top" src="{{ url('/storage/' . $course->image_url) }}" alt="{{ $course->title }}">
                     <div class="card-body">
                         @if ($course->is_enabled)
                             <span class="badge badge-success bg-success">{{ $course->badge }}</span>
                         @else
                             <span class="badge badge-danger bg-danger">{{ $course->badge }}</span>
                         @endif


                         <h5 class="card-title">{{ $course->title }}</h5>
                         {{-- @dd($course->hightlights) --}}
                         @if (is_array($course->highlights))
                             <ul>
                                 @foreach ($course->highlights as $item)
                                     <li>{{ $item['highlight'] }}</li>
                                 @endforeach
                             </ul>
                         @else
                             <p>No highlights available.</p>
                         @endif



                     </div>
                     <div class="card-footer">
                         <div class="row">
                             <div class="col">
                                 {{-- <button type="button" class="btn btn-warning w-100">
                                    Learn More
                                </button> --}}
                                 <a href="{{ route('courses.show', $course->id) }}" class="btn btn-warning w-100">
                                     Learn More
                                 </a>

                             </div>
                             <div class="col">
                                 <a href="/application-form" class="btn btn-outline-warning w-100">Enroll Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
             @empty
                 <div class="alert alert-warning" role="alert">
                     No courses available
                 </div>
             @endforelse




         </div>


     </div>


 </section>
