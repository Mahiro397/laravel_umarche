<x-tests.app>
    <x-slot name="header">ヘッダー１</x-slot>
コンポ―ネットテスト１

<x-tests.card taitle="タイトル" content="本文" :message="$message"/>
<x-tests.card taitle="タイトル２" />
<x-tests.card taitle="CSSを変更したい" class="bg-red-300" />

</x-tests.app>