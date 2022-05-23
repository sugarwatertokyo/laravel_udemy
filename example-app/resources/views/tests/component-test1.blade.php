<x-tests.app>
    <x-slot name="header">header test1</x-slot>
    test1
    <x-tests.card title="title1" content="content1" :message="$message" />
    <x-tests.card title="title2" />
    <x-tests.card title="css change" class="bg-red-300" />
</x-tests.app>
