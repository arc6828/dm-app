<x-blogzine.theme>
    <section class="py-4">
        <div class="container">
            <form action="{{ route('appoint.store') }}" method="post">
                @csrf
                @include('appointment.form')
            </form>
        </div>
    </section>
</x-blogzine.theme>
