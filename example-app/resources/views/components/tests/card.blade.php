@props([
'title' => 'title初期値です。',
'message' => 'message初期値です。',
'content' => 'content初期値です。'
])
<div {{ $attributes->merge([ 'class' => 'border-2 p-2 w-1/4' ]) }}>
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
