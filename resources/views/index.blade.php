<h1>Hello work</h1>

<div>
    @if(count($tasks))
        @foreach($tasks as $task)
            <div>{{$task->title}}</div>
        @endforeach
    @else
    </div>Không có task</div>
    @endif
</div>