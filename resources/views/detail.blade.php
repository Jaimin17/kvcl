@include("nav")
<x-navbar />
@isset($detail[0])
<x-bar-chart input='{{$detail[0]["input"]}}' output='{{$detail[0]["output"]}}' />
@endisset
@include("footer")