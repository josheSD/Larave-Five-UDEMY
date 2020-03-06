@component('mail::message')

    # {{ __("Nuevo esudiante en tu curso!") }}
    {{ __("El estudiante :student se ha inscrito en tu curso :course, FELICITACIONES",['student' => $student,'course' => $course->name]) }}
    <img class="img-reponsive" src="{{ url('storage/courses/' . $course->picture) }}" alt="{{ $course->name }}">

@endcomponent

@component('mail::button',['url' => url('/courses' . $course->slug)])
    {{ __("Ir al curso") }}

    {{ __("Gracias") }}. <br>
    {{ config('app.name')  }}

@endcomponent