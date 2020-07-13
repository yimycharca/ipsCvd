@extends('Peru/mapa')
@section('peru')

<div class="map">
    <div class="map__svg">
        <div class="option"><button id="btnDiagnosed">casos</button><button id="btnDead">muertos</button></div>
        <svg id="peru_svg" version="1.3" viewbox="0 0 542.8 792" xmlns="http://www.w3.org/2000/svg"> <a
                data-region="Amazonas">
                <path class="st0" d="M154.1,294l-4.1,1.3l0,0l-2.6,0.6l0,0l-0.7-6.3l-2.4-2.9l-7-13.7l-7-3.7l-5-9.7l-4.8-3.5l0.2-3
l-4.9-4.1v-3.8l2.6-6.4l0.4-3l1.5-3.8l1.9-2.6v-3.8l-3.5-1.6l-0.1-0.6l-2-0.1l-3-3v-7.5l3-5.6l1.2-4.6l-3.3-9.9l0,0l1.8-1.3
l0.7-3.4l-0.9-7.1l1.3-1.2l3.3-7.8l0.4-5l0.9-2.8l5.7-7.1l2.3-13.2l1.9-1.1l1.7,0.7l0.6,4.1l2.8-2l0.5-0.9l-0.5-1.6l-1.5-2.2
l0.6-1.1l3.6-2.5l3.5-5.1l4.7-4.9l2.8-2.3l2.1-0.8l0,0l1.6,6.8l0.3,5.6l2.1,4l0,0l1.8,4l1.8,8.2l0,0l-0.3,4.6l3.3,5.6l0.6,7.2
l-1.1,10.5l0.5,2.4l-0.4,2.4l0,0l-3,7l0,0l-3.5,4.3l-1.5,3l-0.8,4.5l0.4,3.3l-2.8,3.1v3l4.4,3.5l0.9,3.6l3,6.1l0,0l-2.6,2.4
l-0.7,2.1l-0.4,9l1.2,2.9l4.4,8.5l1.8,2l11.6,3.4l3.2,3.9l2,6l-0.9,1.7l-5,4l-2.3,5.4v1.9l-2.3,2.6l-2.3,1.1l-3-2.3l-4.5-0.4
l-2.3,0.4l-2.3,1.9l-2,9.4l0,0L154.1,294z" id="PE-AMA"></path>
            </a> <a data-region="Áncash">
                <path class="st0" d="M116.3,380.2l1.7-0.3l1.1-2.6l-0.1-3.1l2.2-2.9l12.6-4.3l5.9-15.2l3.4-3l3.8-2.3l3.4-5l9.2-1.5
l1.5,4.8l3,2.9l2.4,1.1l7,11.1l0,0l2.9-0.6l0,0l-0.4,5.9l2.9,1.8l-0.2,5.6l3.9,6.1l4.8,2.2l13.2,8.3l-0.2,3.6l-1.3,1.6l-5.4,0.7
l-4.4,9.7l-2.1,0.4l-1.1,5.8l1.4-0.2l4.9,2.7l2,3.4l0.7,3.1l0.2,5.1l-3.4,3.8l0.9,2.9l-1.3,4.3l-1.2,1.1l0,0l-8.3,3.2l-1.4,2
l-0.8,3.8l-2.7,3l-7.7,6.7l-3.4,1.2l-3.7,0l-0.7-4.5l0.2-2.9l-2.9-1.9l-0.6-2.7l0.4-1.4l1.1-1.6l2-1.3l0.2-2.9l-2-0.9l-2.7,0.5
l-3.4,3.3l-0.7,6.3l-0.8,1.9l-3.3,2.4l0,0l-0.9-2.5l-6.6-10l-4.6-10.1l-3.4-9.3l0.4-3.3l-5.6-7.6l-1-4.1l-0.2-4.1l-1.5-2.8l-2-1.4
l-1.5-6.8l-5.1-4.4L116.3,380.2z" id="PE-ANC"></path>
            </a> <a data-region="Apurímac">
                <path class="st0" d="M380,627.6l-5.4,1.1l-3.7-0.4l-2.9-1.4l-0.9,0.1l-1.2,1.3l-2.4-0.5l0,0l-3.3-0.3l0,0l-3.1-1.8
l-0.7,0.8l-1-0.7l-2.9,0.4l-4.7,1.8l-3.8,0.2l-4.9,2l-1.8,2l-2.3,1.2l-2.2-5.5l0.4-4l-0.7-3.8l-1.8-3.3l4.2-7.2v-2l-2.6-3.5
l-3.8-10.5l-2.4-4.8l0.4-1l1.5-0.2l0.6-0.7l-2.3-3.6l-2.2-0.9l-0.8-1.6l-1.7-10.6l0.9-4l1.1-2.5l0.8-0.3l1.1,0.7l0.9,1.6l10.8,7.9
l6.9-1.4l0.7-2.5l0,0l0.7,0.9l0,0l2.3,1.7l9.8,0.3l4.4-0.7l4.2,1.5l8.1,5.1l9.3,4.7l5.2,1.8l2.5,1.6l2.9,3.1l2.7,5.1l0.4,2
l-0.1,5.6l-1.5,5.3l-0.7,1.4l-4.8,4.3l-1.4,2.9l-8.2,4.1l-1.2,1.4l-0.4,1.1l1,2.2L380,627.6z" id="PE-APU"></path>
            </a> <a data-region="Arequipa">
                <path class="st0" d="M449.9,685.4l-0.7,11.5l-3.6,4.2l-0.5,1l0.4,2.2l-1.6,0.6l-2.9-0.9l-5.1-3.4h-2l-0.9,1.6l4.1,4.6
l-2.5,1.2l-4.1,5.6l0.4,2.6l-0.4,2.3l-2.5,1L425,722l-0.8,1.6l0.4,2.6l1.4,3.1l2.8,3.5l-1.2,4.6l-4.8,2.9l-4.3,1.3l0,0l-4.3-1.7
l-6.4-1.5l-2.3-1.7l-1.6-2.5l-8.6-5l-4.5-3.4l-5.6-6.4l-4-2.3l-6.7-2.1l-4.9-0.3l-2.6-0.8l-4.8-3.9l-14.1-5.8l-3.4-2.9l-4-2
l-18.3-6.3l-7-5.7l-2-2.8l-5.4-2.9l-9.5-3.1l-2-1.5l-1.7-3.2l-24.3-11.3l-2.1-2.1l0,0l2.3-6.6l3.4-4.3l6-3.2l4.4-0.4l0,0l1.1,2.1
l9.9,2.4l2.4,7.4l6.1,5.6l2.6,0.3l4.2-2.1l1.3,7.1l1.5,0l1.5-0.9l0.3-3.7l2.9-6.3l6.5-3.1l-0.2,2.5l1.1,3.1l1.8,1l5.8-0.7l5.2-2.6
l2.7,1l2-0.9l2.9-4.5l3.8-0.9l4.7-6.5l1.3-3.1l-0.7-6.3l0.9-2.9l1.3-2.2l4-1.3l0.7-2.8l0,0l1.3,0.1l0,0l2.4,0.5l1.2-1.3l0.9-0.1
l2.9,1.4l3.7,0.4l5.4-1.1l0,0l-0.3,1.9l0.6,1.2l3.3,3.7l3.6,0.6l4.6-0.9l4.4,1.7l0.8,0.9l1.1,0l1.1-1.7l0.7-4.2l-1-2l0.6-1.3
l1.2-0.1l6.9,8.4l-0.6,8.6l8.2,2.7l6.6-3.4l0.1-1l4.5,1.2l3.8,3.3l0.9-0.2l1.6-1.7l1.7,0l-0.1,10.9l2.7,3.1l2.7,0.7l2.9-0.4l0,0
l-0.1,2.5l0,0l0.5,4.5l4.9,5.6l-1.6,4.5l2.3,3.8l2.1,2.2L449.9,685.4z" id="PE-ARE"></path>
            </a> <a data-region="Ayacucho">
                <path class="st0" d="M362.1,627.7l-0.7,2.8l-4,1.3L356,634l-0.9,2.9l0.7,6.3l-1.3,3.1l-4.7,6.5l-3.8,0.9l-2.9,4.5
l-2,0.9l-2.7-1l-5.2,2.6l-5.8,0.7l-1.8-1l-1.1-3.1l0.2-2.5l-6.5,3.1l-2.9,6.3l-0.3,3.7l-1.5,0.9l-1.5,0l-1.3-7.1l-4.2,2.1
l-2.6-0.3l-6.1-5.6l-2.4-7.4l-9.9-2.4l-1.1-2.1l0,0l1.4-3.5l0-4.5l-3-2.7l-4.9-9.6l-1.3-1.8l-1.6-0.6l-1.5,1.5l-4.7-0.1l-1.8-4.9
l-0.7-4.7l1.1-2.7l0.8-12.9l0,0l0.3,0.1l0,0l1.8-0.2l3.8,1.1l4.7-1.3l2.5-6.3l0.4-7.8l-0.5-1.9l0.5-3.1l-3.2-4.2l-2.8-1.8l1.4-4.7
l4.4-1.3l1.2,0.8l1.4-0.7l4.7-5.6l5.8-3.3l2-4l3.4-1.1l2.1-1.5l-0.9-1.6l0.3-1.3l-0.9-4.4l-3.6-13.8l-0.6-0.8l-0.9-0.1l-0.5-1.6
l-2.7-3l1.4-3.9l2.8,0.2l3.4-2.8l0,0l0,0l0,0l2-0.2l3.4,2.5l3.6,0.7l2.7-0.4l1.8-1.1l4.3,0.2l0,0l-0.1,2l0,0l6.2,13.1l2.2,2.5
l0.7-0.5l2.3,2.2l2.3,4.8l3.1,2.1l4.7,9.6l1.1,4.5l4.9,7.2l-0.2,1.1l0,0l0,0l0,0l-0.7,2.5l-6.9,1.4l-10.8-7.9l-0.9-1.6l-1.1-0.7
l-0.8,0.3l-1.1,2.5l-0.9,4l1.7,10.6l0.8,1.6l2.2,0.9l2.3,3.6l-0.6,0.7l-1.5,0.2l-0.4,1l2.4,4.8l3.8,10.5l2.6,3.5v2l-4.2,7.2
l1.8,3.3l0.7,3.8l-0.4,4l2.2,5.5l2.3-1.2l1.8-2l4.9-2l3.8-0.2l4.7-1.8l2.9-0.4l1,0.7l0.7-0.8l3.1,1.8l0,0L362.1,627.7z"
                    id="PE-AYA"></path>
            </a> <a data-region="Cajamarca">
                <path class="st0" d="M114.4,193.1l3.3,9.9l-1.2,4.6l-3,5.6v7.5l3,3l2,0.1l0.1,0.6l3.5,1.6v3.8l-1.9,2.6l-1.5,3.8
l-0.4,3l-2.6,6.4v3.8l4.9,4.1l-0.2,3l4.8,3.5l5,9.7l7,3.7l7,13.7l2.4,2.9l0.7,6.3l0,0l-0.1,0l0,0l5.5,11.4l1.8,4.7l0.7,4l-5.8,6.7
l-1.5,0.5l-0.6,1.4l-2.2,0.5l-1.6-1.4l-2.6-0.8l-3,2.6l-5.8,2.5l-0.5-2.2l-1.7-1.1l-0.2-6l-2.3-1.5l-6.8,1.1l-2.6-0.8l-0.8-3.4
l-3-1.9l-4.9,2.6l-4.9,5.3l-2.6,1.1l-2.4-0.1l-0.1-1.3l-1.7-3.5l-3.9-3.2l-4.1-1.1l-1.3-3.5v-2.6l-0.8-1.1l-0.4-8.5l0,0l0.9-0.4
l0.4-1.4l0.1-3.6l2.8-1.3l3.6-3.6l0.2-1.6l-0.5-1l-6.1-1.2l-5.7-6.8l-0.5-6.7l2.8-2.7l2-0.9l2.7,0.2l1.7-3.3l1.4-7l-0.4-0.8
l-4.1-1.8l-1.4-2.8l0,0l0.2-0.1l0,0l-2.2-3.9l-0.8-3.6l0.8-6.8l2.6-3.1l0.9,0.1l-0.2-7.1l-1.5-2.1l-1.5-5.2l3.5-5.1l3.4-3.6l0,0
l5.6,0.5l1.6,1.1l1.1-0.2l4.6-5.4l0.4-5.4l1.8-2.7l3.6-2.7L114.4,193.1z" id="PE-CAJ"></path>
            </a> <a data-region="Callao">
                <path class="st0" d="M179.4,498.3l4.4,0.3l0.2,7.8l3.6,5.8l0.7,2.2l-2.2,3.1l0,0l-2.6-2.5l-3.7-1l1.5-3.1l-0.5-4.6
l-1.4-4l0.5-2.9L179.4,498.3z" id="PE-CAL"></path>
            </a> <a data-region="Cusco">
                <path class="st0" d="M360.7,481.2l4.5,2.8l5.9,0.7l3,1.3l0,0l2.1,0.6l4.7-2.4l0,0l2.4-2.1l5.3-1.6l0,0l-0.9,8.9
l-2,3.4l-4.3,4.7l3.7,4.7l-0.4,1.8l1.4,1.6l0.9,4.7l7.6,4.7l2.4,3.4l1.4,3.1l3.4,1.6l-1.1,2.3l0.5,0.3l-4.5,3.7l4.5,5.8l0.7,6.7
l2.5,1.8h1.8l13.2-2.7l4.9,6.9l3.6,2.5l6.5,1.8l1,2l2.1,9.4l2,0.4l2.7-1.8l3.9-3.5l0.6-1.9l1.8-0.7l3.4,1.3l5.1,0.4l4.3,1.3l3-0.2
l3.5,0.7l0,0l-0.4,6.3l0,0l-0.2,4.7l-7.8,8.7l-7.6,9.8l-3.6,1.6l-0.7,5.8l0.9,4l-1.3,8.3l-3.8,7.4l-1.8,6.9l-2.9,2l-1.1,1.8
l3.3,4.3l1.1,0.3l2,3l0.7,4.6l-1.7,3.3l0.3,4.8l1.2,1.9l0.4,3.2l-0.3,3.7l-2,1.1l0.2,2l0,0l0,1.1l0,0l-2.9,0.4l-2.7-0.7l-2.7-3.1
l0.1-10.9l-1.7,0l-1.6,1.7l-0.9,0.2l-3.8-3.3l-4.5-1.2l-0.1,1l-6.6,3.4l-8.2-2.7l0.6-8.6l-6.9-8.4l-1.2,0.1l-0.6,1.3l1,2l-0.7,4.2
l-1.1,1.7l-1.1,0l-0.8-0.9l-4.4-1.7l-4.6,0.9l-3.6-0.6l-3.3-3.7l-0.6-1.2l0.3-1.9l0,0l0.1-2.8l-1-2.2l0.4-1.1l1.2-1.4l8.2-4.1
l1.4-2.9l4.8-4.3l0.7-1.4l1.5-5.3l0.1-5.6l-0.4-2l-2.7-5.1l-2.9-3.1l-2.5-1.6l-5.2-1.8l-9.3-4.7l-8.1-5.1l-4.2-1.5l-4.4,0.7
l-9.8-0.3l-2.3-1.7l0,0l-0.7-0.9l0,0l0.2-1.1l-4.9-7.2l-1.1-4.5l-4.7-9.6l-3.1-2.1l-2.3-4.8l-2.3-2.2l-0.7,0.5l-2.2-2.5l-6.2-13.1
l0,0l0.1-1.7l0,0l4.5-1.2l4.9,0.2l3.6,4.3l9.6-7.4l2-2.7l-5.2-10.2l-3.5-1.4l-0.7-3.6l1.9-8.6l2.3-3.1l2.4-5.9l0,0l0.9,0.4
l10.8-1.4l8.2-2.4l0,0L360.7,481.2z" id="PE-CUS"></path>
            </a> <a data-region="Huánuco">
                <path class="st0" d="M190.3,437l1.2-1.1l1.3-4.3l-0.9-2.9l3.4-3.8l-0.2-5.1l-0.7-3.1l-2-3.4l-4.9-2.7l-1.4,0.2
l1.1-5.8l2.1-0.4l4.4-9.7l5.4-0.7l1.3-1.6l0.2-3.6l-13.2-8.3l-4.8-2.2l-3.9-6.1l0.2-5.6l-2.9-1.8l0.4-5.9l0,0l1.7-0.4l0,0l3.4-2.3
l0,0l2.3,3.5l1.8-0.3l1.2,1.5h6.1l-0.2-0.8l5.4-0.9l3,0.8l4.1-1.5l4.9,2.3l3-4.9l1.8,0.9l0.1-0.5l3.3,2.1l5.5,11.3l2.2,0.3
l1.5-1.8l-1.9-12.6l3.8-3.8l4-1.4l0,0l1.5,2.3l0,0l-0.1,0.2l0,0l-0.8,3.7l0,0l-0.3,5.6l0,0l1,2.6l-0.1,3.5l0,0l-0.7,4l1.3,4.9
l3.9,8.7l7.3,11.6l2.2,0.7l7-4.2l2.4,0.6l3.4-0.9l4-3.8l-0.2-4.5l2.2-2.7l0.9-4.4l5.8-1l1.1,2.2h2l1.1-2l0.2-2.9l2.5-7.7l4.9-1.9
l5.5,0.3l1.8,1.4l0.8,4l-2,1.3l-2.5,4.9l-0.7,3.2l0.8,3.3v4.5l1.8,2.2l0.9,3.4l0,0l-1.8,2.2l-0.8,3.1l0,0l-5.6,6.3l-0.9,3.1
l-2.9,3.1L277,412l-3.6,2.2l-0.7,1.3l-0.8-0.1l-3.1,2.8l-3-3l-1.5-0.8l-2.7-0.2l-7.5,5.8l-1.4,0.2l-8.6,7.2l-4.2,6.5l-2.5,0.9
l-1.1,1.8l-2.2,0.9l-1.8,6l-13.6-2.5l-2-0.9l-2.2-2.2l-3.1-0.2l-3.3,1.1l-6.3,4.2l-3.8,0.9l0,0l-0.1-0.1l0,0l-2.6-1l-0.8-2.9
l-0.9-0.7l-1.9,0.4l-1.1-0.7L190.3,437z" id="PE-HUC"></path>
            </a> <a data-region="Huancavelica">
                <path class="st0" d="M300.1,519.5l-3.4,2.8l-2.8-0.2l-1.4,3.9l2.7,3l0.5,1.6l0.9,0.1l0.6,0.8l3.6,13.8l0.9,4.4
l-0.3,1.3l0.9,1.6L300,554l-3.4,1.1l-2,4l-5.8,3.3l-4.7,5.6l-1.4,0.7l-1.2-0.8l-4.4,1.3l-1.4,4.7l2.8,1.8l3.2,4.2l-0.5,3.1
l0.5,1.9l-0.4,7.8l-2.5,6.3l-4.7,1.3l-3.8-1.1l-1.8,0.2l0,0l-1.4-0.4l0,0h-3.1l-1.7,0.8l-3-0.4l-3.6-2l-1-1.6l-4.6-2.1l-1.3-2.3
l-0.2-4.2l1.4-2.6l-1-5.2l2-2l1.1-2.2l0.1-5l-1.3-1.3l-2.7,0.2l-3.9,3l-4.7,0.2l-0.9-1l-1.4,0.1l-1.3-1.8l3.6-5.6l1-8.5l0,0h0l0,0
l-0.1-1.3l2.7-1.1l3.6-6.5l1.6-1.6l-0.7-2l1.4-4.8l-0.7-0.5l0,0l-0.1-0.2l0,0h3.4l14.3-13.4l4.3-6.7l0.4-5.1l2.5-1.6l5.7-0.9
l8.1,0l1.1,0.7h3.3l6,1.3l2.5,2.2l0.7,2.9l-1.6,0.4l0,0L300.1,519.5z" id="PE-HUV"></path>
            </a> <a data-region="Ica">
                <path class="st0"
                    d="M219,566.1l1.6-1.4l1.8-4l8.3-6l2.7-1.1l2.4,0.9h4.3l0.3,1.1l0,0l0.2,0l0,0l-1,8.5l-3.6,5.6
l1.3,1.8l1.4-0.1l0.9,1l4.7-0.2l3.9-3l2.7-0.2l1.3,1.3l-0.1,5l-1.1,2.2l-2,2l1,5.2l-1.4,2.6l0.2,4.2l1.3,2.3l4.6,2.1l1,1.6l3.6,2
l3,0.4l1.7-0.8h3.1l0,0l1,0.3l0,0l-0.8,12.9l-1.1,2.7l0.7,4.7l1.8,4.9l4.7,0.1l1.5-1.5l1.6,0.6l1.3,1.8l4.9,9.6l3,2.7l0,4.5
l-1.4,3.5l0,0l-4.4,0.4l-6,3.2l-3.4,4.3l-2.3,6.6l0,0l-5.5-8.5l-2.8-2.9l-4.3-3l-5.4-7.9l-13.6-8l-4-3.3l-0.4-3.3l-1.8-4.5
l-4.3-4.2l-2.3-6.4l-2.7-2.5l-4.3-2.1l0.3-9.8l-3.8-1.8l0.7-2.2l1.8-0.7l1.2,0.6l1.2,1.8l3.1-9.3l0.9-7.9l-3.4-6.3L219,566.1z"
                    id="PE-ICA"></path>
            </a> <a data-region="Junín">
                <path class="st0" d="M208.9,470.2l2.6-0.4l2.5,0.7l0.8,1.4l1.1-0.2l1.6,1.2l2.9-0.4l2.2-2.2l3.1,0.4l3.1-1.3l0.9-2.2
l-0.5-2l-3.6,0.2l-0.3-2.4l0.5-1.6l2.9-1.8l2.2,0.2l2,1.6l6.5-1.3l10.3-4.7h1.1l3.1,3.5l4,0.1l2.1-0.7l0.8-1.4l5.4-2.9l2.9-0.4
l3.5,0.8l2.1-0.1l13.4,7.1l5.3-0.1l0,0l1.1,5.3l3,1.1h4.5l6.9-0.2l5.1-1l1.6,6.1l4.2,0.9l2-1.1l0.9-2.9l0.1-8.1l2.2-4.1l5.5,1.7
l0,0l3.1,3.2l0,0l0.7,7l2.4,0.7l1.9,1.6l0.9,6.5l-0.3,4l0,0l-2.4,5.9l-2.3,3.1l-1.9,8.6l0.7,3.6l3.5,1.4l5.2,10.2l-2,2.7l-9.6,7.4
l-3.6-4.3l-4.9-0.2l-4.5,1.2l0,0l0-0.3l0,0l-4.3-0.2l-1.8,1.1l-2.7,0.4l-3.6-0.7l-3.4-2.5l-2,0.2l0,0l-1.2-2l0,0l1.6-0.4l-0.7-2.9
l-2.5-2.2l-6-1.3H288l-1.1-0.7l-8.1,0l-5.7,0.9l-2.5,1.6l-0.4,5.1l-4.3,6.7l-14.3,13.4h-3.4l0,0l-0.3-1l0,0l-0.8-2.3l-0.2-5.6
l0.8-4.4l-2.7-5.1l0.8-2l-0.3-1.3l-0.9-0.7l-0.1-4.4l-7.7,0.4l-9.1-3.1l-3.7-5.1l-2.6-2.5l-1-7.8l-1-0.7l-2.5,0.1l-1.9-0.8
l-1.4-2.4l-4.1-8.4l-0.5-5.3l0.4-4.2l0,0L208.9,470.2z" id="PE-JUN"></path>
            </a> <a data-region="La Libertad">
                <path class="st0" d="M154.4,294.6l7.5,10.1l-1.4,3.4l0.2,2.2l1.8,4.4l1.8,1.1l1.6,14.6l3.6,0.7l1.6,1.3l1.2,7.5l5-1.9
l3.4-0.4l2.6,1.9l4.5,0.8l3.8,5.6l1.1,4.1l-0.9,0.5l0.3,2.2l-8.7,2.2l-1.9,1.9l0,0L178,359l0,0l-4.6,1l0,0l-7-11.1l-2.4-1.1
l-3-2.9l-1.5-4.8l-9.2,1.5l-3.4,5l-3.8,2.3l-3.4,3l-5.9,15.2l-12.6,4.3l-2.2,2.9l0.1,3.1l-1.1,2.6l-1.7,0.3l0,0l0-1.8l-2.7-4.1
l-1.9-10.4l-6.6-7.3l0.3-1.9l-3.3-6.5l-7.8-8.3l-6.1-4.4l-2.3-3l-2.4-4.1l-1.2-4.3l-5.6-8.3l0.1-2.7l-2.3-6l-3-3.3l0,0l7.1-7.5
l2.7-2l4.2,1l1.4,1.2l0,0l0.4,8.5l0.8,1.1v2.6l1.3,3.5l4.1,1.1l3.9,3.2l1.7,3.5l0.1,1.3l2.4,0.1l2.6-1.1l4.9-5.3l4.9-2.6l3,1.9
l0.8,3.4l2.6,0.8l6.8-1.1l2.3,1.5l0.2,6l1.7,1.1l0.5,2.2l5.8-2.5l3-2.6l2.6,0.8l1.6,1.4l2.2-0.5l0.6-1.4l1.5-0.5l5.8-6.7l-0.7-4
l-1.8-4.7l-5.5-11.4l0,0l2.7-0.6l0,0l4.1-1.3l0,0L154.4,294.6z" id="PE-LAL"></path>
            </a> <a data-region="Lambayeque">
                <path class="st0" d="M76.4,249.3l1.2,1.4l0,0l1.4-0.3l0,0l3.1,1.2l0.6,1.4l0,0l0.9-0.5l0,0l3.3-2.6l0,0l1.4,2.8
l4.1,1.8l0.4,0.8l-1.4,7l-1.7,3.3l-2.7-0.2l-2,0.9l-2.8,2.7l0.5,6.7l5.7,6.8l6.1,1.2l0.5,1l-0.2,1.6l-3.6,3.6l-2.8,1.3l-0.1,3.6
l-0.4,1.4l-0.9,0.4l0,0l-1.4-1.2l-4.2-1l-2.7,2l-7.1,7.5l0,0l-0.3-2.8l-0.7-1.1l-3.7-4.5l-4.9-4.1l-2-5.2l-5.8-5.3L40,273.6
l-6.6-4.9l0,0l5.3-7.5l1.5-3.7l4.2-5.1L46,251l5.4-1.8l5.1-4.1l3.5-4.8l0.3-3.4l1.2-2.9l6.6,5.1l2.9,6.3l1.8,0.8l0,0l2.6,1.3
L76.4,249.3z" id="PE-LAM"></path>
            </a> <a data-region="Lima">
                <path class="st0" d="M209.3,471.1l-0.4,4.2l0.5,5.3l4.1,8.4l1.4,2.4l1.9,0.8l2.5-0.1l1,0.7l1,7.8l2.6,2.5l3.7,5.1
l9.1,3.1l7.7-0.4l0.1,4.4l0.9,0.7l0.3,1.3l-0.8,2l2.7,5.1l-0.8,4.4l0.2,5.6l0.8,2.3l0,0l0.4,1.1l0,0l0.7,0.5l-1.4,4.8l0.7,2
l-1.6,1.6l-3.6,6.5l-2.7,1.1l0.1,1.3l0,0l-0.2,0l0,0l-0.3-1.1h-4.3l-2.4-0.9l-2.7,1.1l-8.3,6l-1.8,4l-1.6,1.4l0,0l-1.7-0.2
l-8.3-9.5l-1.2-6.2l-5-6.7l-6.4-13.3l0,0l1.7-1.3l-0.4-4l4-6.3l0.2-5.6l-2-3.6l-2.9-3.4l-3.1-1.3l1.1-3.4l1.8-0.4l-1.1-2.2
l-9.6-9.6l-2.9-0.7l-2.2,2.2l-2.2,1.1l-1.6,2.1l0,0l-2.8-4.2l-3-2.6l-11.7-6.6l-0.8-2l0.7-1.4l1.4-0.1l0.2-1.5l-2.9-10.6l-4.4-7.9
l-4.8-5.9l0,0l3.3-2.4l0.8-1.9l0.7-6.3l3.4-3.3l2.7-0.5l2,0.9l-0.2,2.9l-2,1.3l-1.1,1.6l-0.4,1.4l0.6,2.7l2.9,1.9l-0.2,2.9
l0.7,4.5l3.7,0l3.4-1.2l7.7-6.7l2.7-3l0.8-3.8l1.4-2l8.3-3.2l0,0l0.5,2l1.1,0.7l1.9-0.4l0.9,0.7l0.8,2.9l2.6,1l0,0l0.7,0.8l0,0
l1.3,4.8l2.1,3.6l0.9,4.1l2.4,2.8l0.2,6.7l0.5,1.2l2.5,1.7l0,0L209.3,471.1z" id="PE-LIM"></path>
            </a> <a data-region="lima metropolitana">
                <path class="st0" d="M196.4,530.3l-1.5-3.6l-8.8-9.1l0,0l2.2-3.1l-0.7-2.2l-3.6-5.8l-0.2-7.8l-4.4-0.3l0,0l-2.3-4.3
l0,0l1.6-2.1l2.2-1.1l2.2-2.2l2.9,0.7l9.6,9.6l1.1,2.2l-1.8,0.4l-1.1,3.4l3.1,1.3l2.9,3.4l2,3.6l-0.2,5.6l-4,6.3l0.4,4
L196.4,530.3z" id="PE-LMA"></path>
            </a> <a data-region="Loreto">
                <path class="st0" d="M266.9,0.4l4.9,3.3l3.6,3.2l3.3,1.4l2-1.1l1.7,0.1l2.2,3.5l0.5,3.1l3.2,1.9l1.1-1l9.1,6.8l1,1.5
l2.3,8.6l2.9,3.1l-1.5,3.3l1.8,3.5l1.1,0.9l5.9,1.6l9,5.8l1.2,2.4l3.8,1l4.2-0.2l4.2,3.8l0.5,3.9l4.1,6l-1.7,1.9l-0.9,4l3.9,2.9
l5.1,2.4l2.5-1.2l1.8-1.7l2.7,1.8l1.8,3.2l1.4,9.4l-0.8,2.3l-2.3,1.9l0.7,3.5L355,99l3,1.7l2.9-0.4l2.3,4.5l12.5-4.2l12.4,3.6
l3.1,0.3l10.5-5.5l3.9,0.4l0.8-2.4l2.7-3.8l4.9-3.5l0.8,3.3l6.6,0.4l4.6,2L428,98l7.4,0.6l3.7-2.1l5.3-1.4l5-2.3l6.5,4.2h4
l3.8,3.4l4.3,1.9l2.6,2.3l1.2-0.4l1.7,0.4l3.3,2.9l0.4,1.7l7.6-1.5v2.4l-1.6,5.3l-28,43.5l8.4,3.4h1.2l5.9-3l1.7,0.5l3.8,3.1
l2.3,2.8l2.5,5.7l7.1,5.8l0.3,2.3l-1.3,2.1l-1.6,1.1l-7.7-0.2l-4.4-3.5l0.1-3.2l-0.9-1.5l-4.7-0.3l-3,2l-3.6,0.7l-1.8-1.5
l-5.8-0.5l-3,1.7l-1.7,4l-3.6,4.3l-1.6,0l-2.5,2.3h-4.8l-4.3,2.4l-6.2,1l-6.2,2.4l-12.5-0.5l-8.1,7.2l-4.8,3.4l-6.2,2.4l-6.7,4.3
l-6.7,7.2l-6.2,2.4l-4.8,7.7l-2.9,16.3l-5.8,4.8l-5.3,8.6l4.3,10.5l1.9,6.7l-6.2,6.2l-21.6,10.6l-1.9,10.1l-2.1,0.6l3.3,4.7
l0.6,3.7l-1.4,1.1l-8.2,1.1l0,3.6l-1.4,3.6l-1.1,0.1l0,0l-1.3-1.1l-0.1-1.4l-5.8-4.7l-7.4-0.7l-1.6-1.8l-3.8,0.2l-5.3,7.3
l1.3,12.2l-0.1,3.8l-1,2.2l-2.1,1.4l-1.1,2.5l-2.5,1.3l-5.6,0.5l-4.5-0.5l-2.2-1.1l-4.9-0.4l-5.3,5.7l-4.2-0.6l-2.7,2l-1,1.9
l-0.2,9.1l-1.5,1.1l-2.3,0.6l-3.5-2.8h-1.9l-9.8,9.3l0,0l-1.6,0.7l-1-2.6l0,0l0.3-5.6l0,0l0.8-3.7l0,0l0.1-0.2l0,0l-1.7-2.7l0,0
l0.8-5.6l1.9-3.4l2.4-2.2l-1.5-3h-3l-0.7-2.6l-2.6-3.5l-1.2-4.1l-1-6.9l-3.5-3.5l-1.2-3.7l0.2-5.9l2.8-0.9l0.4-1.7l4.1-3
l-1.1-12.8l2.1-2.1l2.6-0.4l3.7,1.1l2.3,1.7l0,0l0.4,0.6l4.7-0.2l3.8-0.8l0,0l1.6-0.6l1.1-4.6l1.1-12.8l-0.5-3.4l1.9-2.2l0.4-3.8
l-2.3-3l-3.8-1.9l0,0l-5.3,1.1l-2.8,2.1l0,0l-3.9-0.8l-6.3,0l-6.5,4.3l-3-1.5l-3-3.8l-4.1-3.8l-3.8-0.4l-3.9,2.4l-2.4,0.4
l-4.2-2.4l-0.8-1.3l0,0l-2.2-6l0,0l-0.6-1.2l0,0l-0.7-1.2l-4.3-3l-2.2-0.7l0,0l-9.8-0.4l0,0l0,0l0,0l-2.4-0.9l-4.8-5.4l-7.3-2.6
l-4.2-3.4l0,0l-3-6.1l-0.9-3.6l-4.4-3.5v-3l2.8-3.1l-0.4-3.3l0.8-4.5l1.5-3l3.5-4.3l0,0l3-7l0,0l0.4-2.4l-0.5-2.4l1.1-10.5
l-0.6-7.2l-3.3-5.6l0.3-4.6l0,0l-1.8-8.2l-1.8-4l0,0l-2.1-4l-0.3-5.6l-1.6-6.8l0,0l49.1-16.8l25-18.7l19.1-22.7l2.7-2.4l6.9-26.2
l3.1,2.4l4.9-0.4l-3.2-10.1l0.4-3.1l1.5-1.1l0.2-2.9l-0.8-1.6l-3.3-2.5l-1,0.1l-2.1-2l-2.9-7.9l-3.8-2.2l-2.3-0.3l0.4-2.8l4.1,0.4
l4,2l3.2-0.6l2.7-1.3l1.1,0.1l1.4-1.1L264,0L266.9,0.4z" id="PE-LOR"></path>
            </a> <a data-region="Madre de Dios">
                <path class="st0" d="M459.2,466.7l0,1.5l4.5-3.2l3.2,3.1l4.6-0.4l14.2-1.9l3.7-1.8l6.2,0.5l1.8,1.6l7.3-0.5L532,511
l10.7,21.8l-3,3.6l-3.1,6.5L534,544l0.4,3.5l-0.8,3.5l-3.6,2.6l0,0l-3.3,2.1l-18.1,7.2l-2.5,2.7l-4.9,1.1l-4.8,0.4l-9.5-2
l-10.5-5.1l-6.3-0.7l-2.7,0.5l0,0l0-0.3l0,0l-3.5-0.7l-3,0.2l-4.3-1.3l-5.1-0.4l-3.4-1.3l-1.8,0.7l-0.6,1.9l-3.9,3.5l-2.7,1.8
l-2-0.4l-2.1-9.4l-1-2l-6.5-1.8l-3.6-2.5l-4.9-6.9l-13.2,2.7h-1.8l-2.5-1.8l-0.7-6.7l-4.5-5.8l4.5-3.7l-0.5-0.3l1.1-2.3l-3.4-1.6
l-1.4-3.1l-2.4-3.4l-7.6-4.7l-0.9-4.7l-1.4-1.6l0.4-1.8l-3.7-4.7l4.3-4.7l2-3.4l0.9-8.9l0,0l0.5,0.1l0,0l3.1-3.8l1-3.7l0.6-2.4
l-1.6-1.4l0.4-2l12.3,0.3l4.4-0.5l16.3-0.2l4.5-4.3l0.8-2.4l0.6-5.9l1.4-4.3l4.3-4.7l4.7-1.8l8.4-8.5l2.4-1l6.6-10.6l0,0
L459.2,466.7z" id="PE-MDD"></path>
            </a> <a data-region="Moquegua">
                <path class="st0" d="M449.9,685.4l1.2-0.2l1.3,0.9l8.5-0.4l0.7,0.7l6.7,1.6l0.8,1.1l1.9,5.4l0.1,6.1l1.9,5.7l7.5,7.7
l3.8,1l1.2,1.3l-3.5,3.4l-0.4,6.9l-1.3,1.5l0,0l0.1,0.2l0,0l-3.6,0.7l-0.6-1.5l-0.7-0.2l-0.5-4.6l-2-1.1l-4.1,0.4l-1.4,0.8
l-1.4,1.8l-1,3.2l0.8,5.1l-5.1,6.1l-4.5,2.1l-6.7,12.2v2.1l-2.2,5.1l-2.5,2.2l-6.7,3.3h-1.9l0,0l-1.9-2.1l-3.9-2.3l-2.4-4
l-1.8-9.9l-3.7-3l-0.4-1.3l-3.8-2l0,0l4.3-1.3l4.8-2.9l1.2-4.6l-2.8-3.5l-1.4-3.1l-0.4-2.6l0.8-1.6l2.8-2.3l2.5-1l0.4-2.3
l-0.4-2.6l4.1-5.6l2.5-1.2l-4.1-4.6l0.9-1.6h2l5.1,3.4l2.9,0.9l1.6-0.6l-0.4-2.2l0.5-1l3.6-4.2L449.9,685.4z" id="PE-MOQ">
                </path>
            </a> <a data-region="Pasco">
                <path class="st0" d="M293.7,461.2l-5.3,0.1l-13.4-7.1l-2.1,0.1l-3.5-0.8l-2.9,0.4l-5.4,2.9l-0.8,1.4l-2.1,0.7l-4-0.1
l-3.1-3.5H250l-10.3,4.7l-6.5,1.3l-2-1.6l-2.2-0.2l-2.9,1.8l-0.5,1.6l0.3,2.4l3.6-0.2l0.5,2l-0.9,2.2l-3.1,1.3l-3.1-0.4l-2.2,2.2
l-2.9,0.4l-1.6-1.2l-1.1,0.2l-0.8-1.4l-2.5-0.7l-2.6,0.4l0,0l-0.3-0.7l0,0l-2.5-1.7l-0.5-1.2l-0.2-6.7l-2.4-2.8l-0.9-4.1l-2.1-3.6
l-1.3-4.8l0,0l-0.6-0.7l0,0l3.8-0.9l6.3-4.2l3.3-1.1l3.1,0.2l2.2,2.2l2,0.9l13.6,2.5l1.8-6l2.2-0.9l1.1-1.8l2.5-0.9l4.2-6.5
l8.6-7.2l1.4-0.2l7.5-5.8l2.7,0.2l1.5,0.8l3,3l3.1-2.8l0.8,0.1l0.7-1.3l3.6-2.2l2.7-0.2l2.9-3.1l0.9-3.1l5.6-6.3l0,0l0.2,1.8l0,0
l1.8,2.5l2.2,1.6l0,0l2.2,5.6l0,0l-0.3,3.7l1,2.9l1.7,0.8l1.1,7.1l2.7,3.6l2,1.6l2.9,0.5l0,0l-0.2,3.4l-1.1,2.5l0,0l-0.4,2.9
l1.1,2.9l3.1,2.7l0.7,1.8l-0.2,2l-1.3,0.7l-0.1,1.1l-5.1,2.2l-4.8,5.2L293.7,461.2z" id="PE-PAS"></path>
            </a> <a data-region="Piura">
                <path class="st0" d="M11.2,258.5l-1.9-4l0.7-2.7l1.7-2l2.8,0.2l2-0.7l2.8-3.7l1.3-3.7l-0.3-4.3l-4.8-8.8L9,225.4
l-3.7-3l0.3-2.3l1.5-2.5l1.2-0.7l0.6-3l3.5-0.6l-3.1-4.4L5,205.5L0,200l0.2-3.8l2.5-12.5l2.9-4.8l7.2-6.3l0,0l1,2.8l2.8,2.3
l11.8-0.4l3.4-1.3l0.9-1.1l0,0l2.5-2.2l4,5.3l1.3,4.2l-1.6,2.4l-0.1,1.2l0.8,1.1l3.1,1.6l2.4-1.1l5.4-4.6l1.2-0.1l2.4,0.5l2.3,1.5
l7.4,2.8l2.1,1.9l1.2-0.9l2.9-0.3l8.1,1.3l0.9,0.8l1,4.2l3,7.5l6.8,7.1l2.3,0l0,0l-3.4,3.6l-3.5,5.1l1.5,5.2l1.5,2.1l0.2,7.1
l-0.9-0.1l-2.6,3.1l-0.8,6.8l0.8,3.6l2.2,3.9l0,0l-3.4,2.7l0,0l-0.9,0.5l0,0l-0.6-1.4l-3.1-1.2l0,0l-1.4,0.3l0,0l-2.2-3.3
l-2.6-1.3l0,0l-1.8-0.8l-2.9-6.3l-6.6-5.1l-1.2,2.9l-0.3,3.4l-3.5,4.8l-5.1,4.1L46,251l-1.7,1.5l-4.2,5.1l-1.5,3.7l-5.3,7.5l0,0
l-2.2,0.2l-3.3,1.5l-9.5-7.2l-0.7-1.6L11.2,258.5z" id="PE-PIU"></path>
            </a> <a data-region="Puno">
                <polygon class="st0" points="529.7,579.2 526.2,585.4 528.2,589 529.9,596.7 532.3,598.9 531.9,602.4 532.8,605.3 529.8,606.4 
527.6,608.1 526.8,613.2 518.1,623.5 515.4,627.3 513.5,631.4 512.6,640.4 516.3,645.4 523,651.9 522.7,653.1 520.5,653.4 
517.4,656.3 514.4,661.8 510.9,669.3 517.8,687.8 525.7,693 528,695.2 529.6,698.8 529.3,704.5 527.4,706.9 527.1,710.2 
528.3,715 520.7,720.4 515.2,726.9 512.3,732.5 506.2,736 502.4,739.7 500.8,743 497.5,743.5 489.5,739.4 484.7,735.6 
480.3,728.2 481.6,726.7 482,719.8 485.5,716.4 484.3,715.1 480.5,714.1 473,706.4 471.1,700.7 471,694.6 469.1,689.2 
468.2,688.1 461.5,686.5 460.8,685.8 452.3,686.2 451,685.3 449.9,685.4 450.5,682.7 448.4,680.5 446.1,676.8 447.8,672.3 
442.9,666.6 442.4,662.2 442.4,658.6 442.2,656.6 444.2,655.5 444.5,651.9 444.1,648.7 442.9,646.8 442.6,642.1 444.3,638.8 
443.5,634.2 441.5,631.3 440.4,631 437.1,626.7 438.2,624.9 441.1,622.9 442.9,615.9 446.7,608.6 448.1,600.3 447.2,596.3 
447.8,590.5 451.4,588.9 459,579.1 466.8,570.4 467,565.7 467.5,559.7 470.2,559.2 476.4,559.9 486.9,565 496.5,567 501.2,566.6 
506.2,565.4 508.6,562.8 526.7,555.6 530,553.5 533.6,550.9 533,555.3 533.3,559.9 534.1,561.8 532.8,567.8 530.6,571.4 
530.5,576.6 		"></polygon>
            </a> <a data-region="San Martín">
                <path class="st0" d="M160,227.1l4.2,3.4l7.3,2.6l4.8,5.4l2.4,0.9l4.9,0.6l4.9-0.1l0,0l2.2,0.7l4.3,3l0.7,1.2l0,0
l0.6,1.2l0,0l2.2,6l0,0l0.8,1.3l4.2,2.4l2.4-0.4l3.9-2.4l3.8,0.4l4.1,3.8l3,3.8l3,1.5l6.5-4.3l6.3,0l3.9,0.8l0,0l2.8-2.1l5.3-1.1
l0,0l3.8,1.9l2.3,3l-0.4,3.8l-1.9,2.2l0.5,3.4l-1.1,12.8l-1.1,4.6l-1.6,0.6l0,0l-3.8,0.8l-4.7,0.2l-0.4-0.6l0,0l-2.3-1.7l-3.7-1.1
l-2.6,0.4l-2.1,2.1l1.1,12.8l-4.1,3l-0.4,1.7l-2.8,0.9l-0.2,5.9l1.2,3.7l3.5,3.5l1,6.9l1.2,4.1l2.6,3.5l0.7,2.6h3l1.5,3l-2.4,2.2
l-1.9,3.4l-0.8,5.6l0,0l0.3,0.4l0,0l-4,1.4l-3.8,3.8l1.9,12.6l-1.5,1.8l-2.2-0.3l-5.5-11.3l-3.3-2.1l-0.1,0.5l-1.8-0.9l-3,4.9
L205,359l-4.1,1.5l-3-0.8l-5.4,0.9l0.2,0.8h-6.1l-1.2-1.5l-1.8,0.3l-2.3-3.5l0,0l1.9-1.9l8.7-2.2l-0.3-2.2l0.9-0.5l-1.1-4.1
l-3.8-5.6l-4.5-0.8l-2.6-1.9l-3.4,0.4l-5,1.9l-1.2-7.5l-1.6-1.3l-3.6-0.7l-1.6-14.6l-1.8-1.1l-1.8-4.4l-0.2-2.2l1.4-3.4l-7.5-10.1
l0,0l-0.5-1.5l0,0l2-9.4l2.3-1.9l2.3-0.4l4.5,0.4l3,2.3l2.3-1.1l2.3-2.6v-1.9l2.3-5.4l5-4l0.9-1.7l-2-6l-3.2-3.9l-11.6-3.4l-1.8-2
l-4.4-8.5l-1.2-2.9l0.4-9l0.7-2.1L160,227.1z" id="PE-SAM"></path>
            </a> <a data-region="Tacna">
                <path class="st0" d="M436.4,766.2h1.9l6.7-3.3l2.5-2.2l2.2-5.1v-2.1l6.7-12.2l4.5-2.1l5.1-6.1l-0.8-5.1l1-3.2l1.4-1.8
l1.4-0.8l4.1-0.4l2,1.1l0.5,4.6l0.7,0.2l0.6,1.5l3.6-0.7l0,0l4.3,7.2l0,0l4.8,3.8l8.1,4.2l3.3-0.5l0,0l2.8,0.4l3.8,3.7l0.1,5.6
l-8.7,7.8l-2.9,0.4l-1.1,1.6l2.5,10.3l0.2,4.5l-4,8l-4.2,4l-18.3,2.7l-1.6-2.1l-0.4,0.3l-5-4.5l-5.4-2.5l-13.1-12.4l-5.9-2.5
L436.4,766.2z" id="PE-TAC"></path>
            </a> <a data-region="Tumbes">
                <path class="st0" d="M44.1,167.9l-1.4-0.6l-3.3,0.3l-1.5,3l-5.2,4.4l0,0l-0.9,1.1l-3.4,1.3l-11.8,0.4l-2.8-2.3l-1-2.8
l0,0l1.2-0.8l3.1-5.3l5.3-3.9l0.8-3.1l1.2-2l9.2-5.4l3-4.7l4.8-0.6l1.9-1l3.6,1.1l2.3,8.2l0.3,4.3l-1.6,5.5L44.1,167.9z"
                    id="PE-TUM"></path>
            </a> <a data-region="Ucayali">
                <path class="st0" d="M235.8,364.5l9.8-9.3h1.9l3.5,2.8l2.3-0.6l1.5-1.1l0.2-9.1l1-1.9l2.7-2l4.2,0.6l5.3-5.7l4.9,0.4
l2.2,1.1l4.5,0.5l5.6-0.5l2.5-1.3l1.1-2.5l2.1-1.4l1-2.2l0.1-3.8l-1.3-12.2l5.3-7.3l3.8-0.2l1.6,1.8l7.4,0.7l5.8,4.7l0.1,1.4
l1.3,1.1l0,0l-0.6,0.1l-0.1,1l5.9,5.2l1,1.8l5.8,2.5l0.5,1.1l-0.2,1.8l-1.2,1.4l-2.2-0.3l0.2,3.2l5.1,2.9l2.4,4.5l2.7,9.9l5.5,4.2
l2.5,6.5l3.1,3.1l2.5,0.5l2.1,1.2l4.6,8.1l2.3,1.2l1.9,2.5l0.6,3.4l-0.8,3.3l-2.5,3.4l-6.8,6.2l-0.8,1.5l20.1,0.5l15.3,3.4l3,1.7
l2.1,5.3l-0.7,3.2l0.4,1.2l3.4,1.9l0.7,1.4l0.6,2.3l-1.5,5l1.8,0.1l36.2-0.4l4.9-2.7l1.8-2.9l5.3-1.9l5.6-6.5l4.4-2.8l9-7.4
l-1.2,15l-1.3,1.9l-0.1,6l0,0l-6.6,10.6l-2.4,1l-8.4,8.5l-4.7,1.8l-4.3,4.7l-1.4,4.3l-0.6,5.9l-0.8,2.4l-4.5,4.3l-16.3,0.2
l-4.4,0.5l-12.3-0.3l-0.4,2l1.6,1.4l-0.6,2.4l-1,3.7l-3.1,3.8l0,0l-1-0.2l-4.8,1.7l-2.4,2.1l0,0l-4.7,2.4l-2.1-0.6l0,0l-3-1.3
l-5.9-0.7l-4.5-2.8l-1.2-2.9l0,0l-8.2,2.4l-10.8,1.4l-0.9-0.4l0,0l0.3-4l-0.9-6.5l-1.9-1.6l-2.4-0.7l-0.7-7l0,0l-3.1-3.2l0,0
l-5.5-1.7l-2.2,4.1l-0.1,8.1l-0.9,2.9l-2,1.1l-4.2-0.9l-1.6-6.1l-5.1,1l-6.9,0.2h-4.5l-3-1.1l-1.1-5.3l0,0l4.6-3.3l4.8-5.2
l5.1-2.2l0.1-1.1l1.3-0.7l0.2-2l-0.7-1.8l-3.1-2.7l-1.1-2.9l0.4-2.9l0,0l1.1-2.5l0.2-3.4l0,0l-2.9-0.5l-2-1.6l-2.7-3.6L298,418
l-1.7-0.8l-1-2.9l0.3-3.7l0,0l-2.2-5.6l0,0l-2.2-1.6l-1.8-2.5l0,0l-0.2-2.5l0.9-2.5l1.8-2.2l0,0l-0.9-3.4l-1.8-2.2v-4.5l-0.8-3.3
l0.7-3.2l2.5-4.9l2-1.3l-0.8-4l-1.8-1.4l-5.5-0.3l-4.9,1.9l-2.5,7.7l-0.2,2.9l-1.1,2h-2l-1.1-2.2l-5.8,1l-0.9,4.4l-2.2,2.7
l0.2,4.5l-4,3.8l-3.4,0.9l-2.4-0.6l-7,4.2l-2.2-0.7l-7.3-11.6l-3.9-8.7l-1.3-4.9l0.7-4l0,0l0.1-3.5L235.8,364.5z"
                    id="PE-UCA"></path>
            </a> <a data-region="Lima">
                <circle class="circle" cx="193.4" cy="503.3" r="40"></circle>
            </a> <a data-region="Lambayeque">
                <circle class="circle" cx="64.2" cy="276.6" r="22.9"></circle>
            </a> <a data-region="Loreto">
                <circle class="circle" cx="316.5" cy="177.7" r="21.2"></circle>
            </a> <a data-region="Piura">
                <circle class="circle" cx="41.3" cy="214.2" r="17.8"></circle>
            </a> <a data-region="La Libertad">
                <circle class="circle" cx="111.6" cy="346" r="17.8"></circle>
            </a> <a data-region="Áncash">
                <circle class="circle" cx="158.5" cy="405.3" r="17.8"></circle>
            </a> <a data-region="Arequipa">
                <circle class="circle" cx="377.2" cy="709.6" r="15.1"></circle>
            </a> <a data-region="Cusco">
                <circle class="circle" cx="377.2" cy="543.3" r="10.9"></circle>
            </a> <a data-region="Amazonas">
                <circle class="circle" cx="139.6" cy="241.5" r="9"></circle>
            </a> <a data-region="San Martín">
                <circle class="circle" cx="198.1" cy="302.1" r="12"></circle>
            </a> <a data-region="Ucayali">
                <circle class="circle" cx="334.6" cy="411.5" r="10"></circle>
            </a> <a data-region="Huánuco">
                <circle class="circle" cx="222.9" cy="396" r="12"></circle>
            </a> <a data-region="Ica">
                <circle class="circle" cx="244.3" cy="609.3" r="10.9"></circle>
            </a> <a data-region="Junín">
                <circle class="circle" cx="284.1" cy="486.5" r="10.9"></circle>
            </a> <a data-region="Tumbes">
                <circle class="circle" cx="29" cy="158.3" r="11.3"></circle>
            </a> <a data-region="Moquegua">
                <circle class="circle" cx="460" cy="708.9" r="8"></circle>
            </a> <a data-region="Ayacucho">
                <circle class="circle" cx="304" cy="592.9" r="8"></circle>
            </a> <a data-region="Huancavelica">
                <circle class="circle" cx="275.6" cy="545.5" r="8"></circle>
            </a> <a data-region="Madre de Dios">
                <circle class="circle" cx="450.6" cy="500.4" r="10"></circle>
            </a> <a data-region="Pasco">
                <circle class="circle" cx="283" cy="436.8" r="10"></circle>
            </a> <a data-region="Cajamarca">
                <circle class="circle" cx="106.3" cy="266.4" r="8"></circle>
            </a> <a data-region="Tacna">
                <circle class="circle" cx="478" cy="745.6" r="8"></circle>
            </a> <a data-region="Apurimac">
                <circle class="circle" cx="352" cy="598.6" r="7"></circle>
            </a> <a data-region="Puno">
                <circle class="circle" cx="474" cy="635.6" r="8"></circle>
            </a> <text class="st2 st3" transform="matrix(1 0 0 1 282.0659 209.1955)"> Loreto </text> <text
                class="st4 st5 st6 regionText" data-region="Loreto" transform="matrix(1 0 0 1 279.7906 198.6046)"> 340
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 119.2956 247.1776)"> Amazonas </text> <text
                class="st4 st5 st6 regionText" data-region="Amazonas" transform="matrix(1 0 0 1 129.116 236.5867)"> 25
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 96.6997 293.9498)"> Cajamarca </text> <text
                class="st4 st5 st6 regionText" data-region="Cajamarca" transform="matrix(1 0 0 1 106.735 283.3589)"> 11
            </text> <text class="st2 st3" transform="matrix(1 0 0 1 20.8681 161.7201)"> Tumbes </text> <text
                class="st4 st5 st6 regionText" data-region="Tumbes" transform="matrix(1 0 0 1 26.212 151.1292)"> 72
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 36.8114 232.3853)"> Piura </text> <text
                class="st4 st5 st6 regionText" data-region="Piura" transform="matrix(1 0 0 1 32.2706 221.7944)"> 120
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 34.3366 293.3923)"> Lambayeque </text> <text
                class="st4 st5 st6 regionText" data-region="Lambayeque" transform="matrix(1 0 0 1 43.4305 282.8014)">
                392
            </text> <text class="st2 st3" transform="matrix(1 0 0 1 88.8285 359.0956)"> La Libertad </text> <text
                class="st4 st5 st6 regionText" data-region="La Libertad" transform="matrix(1 0 0 1 94.9556 348.5047)">
                115
            </text> <text class="st2 st3" transform="matrix(1 0 0 1 145.1183 413.6198)"> Ancash </text> <text
                class="st4 st5 st6 regionText" data-region="Áncash" transform="matrix(1 0 0 1 144.7005 403.029)"> 110
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 167.1853 494.2069)"> Lima </text> <text
                class="st4 st5 st6 regionText" data-region="Lima" transform="matrix(1 0 0 1 157.6308 483.616)"> 7458
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 149.8231 539.7015)"> Callao </text> <text
                class="st4 st5 st6 regionText" data-region="Callao" transform="matrix(1 0 0 1 147.2314 529.1106)"> 733
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 233.1006 627.9004)"> Ica </text> <text
                class="st4 st5 st6 regionText" data-region="Ica" transform="matrix(1 0 0 1 229.2785 617.3094)"> 58
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 242.3059 568.6754)"> Huancavelica </text> <text
                class="st4 st5 st6 regionText" data-region="Huancavelica" transform="matrix(1 0 0 1 257.1205 558.0845)">
                10
            </text> <text class="st2 st3" transform="matrix(1 0 0 1 284.6153 621.5156)"> Ayacucho </text> <text
                class="st4 st5 st6 regionText" data-region="Ayacucho" transform="matrix(1 0 0 1 292.9904 610.9246)"> 11
            </text> <text class="st2 st3" transform="matrix(1 0 0 1 365.5189 692.7999)"> Arequipa </text> <text
                class="st4 st5 st6 regionText" data-region="Arequipa" transform="matrix(1 0 0 1 372.2905 682.209)"> 98
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 429.6787 738.0179)"> Moquegua </text> <text
                class="st4 st5 st6 regionText" data-region="Moquegua" transform="matrix(1 0 0 1 439.4953 727.427)"> 12
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 462.9547 775.1359)"> Tacna </text> <text
                class="st4 st5 st6 regionText" data-region="Tacna" transform="matrix(1 0 0 1 469.404 764.545)"> 9
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 476.2631 652.5154)"> Puno </text> <text
                class="st4 st5 st6 regionText" data-region="Puno" transform="matrix(1 0 0 1 480.8902 641.9244)"> 2
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 381.2787 576.7213)"> Cusco </text> <text
                class="st4 st5 st6 regionText" data-region="Cusco" transform="matrix(1 0 0 1 383.3453 566.1303)"> 59
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 436.2204 529.111)"> Madre de Dios </text> <text
                class="st4 st5 st6 regionText" data-region="Madre de Dios"
                transform="matrix(1 0 0 1 452.7303 518.5201)"> 10
            </text> <text class="st2 st3" transform="matrix(1 0 0 1 333.0588 436.0497)"> Ucayali </text> <text
                class="st4 st5 st6 regionText" data-region="Ucayali" transform="matrix(1 0 0 1 336.7523 425.4587)"> 17
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 206.8337 417.1145)"> Huánuco </text> <text
                class="st4 st5 st6 regionText" data-region="Huánuco" transform="matrix(1 0 0 1 213.6737 406.5236)"> 15
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 257.9033 449.1956)"> Pasco </text> <text
                class="st4 st5 st6 regionText" data-region="Pasco" transform="matrix(1 0 0 1 259.8604 438.6047)"> 11
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 261.5705 497.1212)"> Junín </text> <text
                class="st4 st5 st6 regionText" data-region="Junín" transform="matrix(1 0 0 1 262.2054 486.5302)"> 68
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 342.4366 614.2305)"> Apurimac </text> <text
                class="st4 st5 st6 regionText" data-region="Apurímac" transform="matrix(1 0 0 1 355.0051 603.6396)"> 5
            </text>
            <text class="st2 st3" transform="matrix(1 0 0 1 178.8704 322.8083)"> San Martín </text> <text
                class="st4 st5 st6 regionText" data-region="San Martín" transform="matrix(1 0 0 1 188.9604 312.2174)">
                23
            </text></svg>
    </div>

    <div class="map__options">
        <div class="container__options"><button id="btnClose">x</button>

            <div class="data-region"><label for="">Region</label> <input id="data_region" type="text" /></div>

            <div class="data-diagnosed"><label for="">Casos</label> <input id="data_diagnosed" type="text" /></div>

            <div class="data-dead"><label for="">Muertos</label> <input id="data_dead" type="text" /></div>
        </div>
    </div>
</div>
<style type="text/css">
.st0 {
    fill: #cccccc;
    stroke: #8e8e8e;
    stroke-width: 0.5;
}

.circle {
    fill: #fe4342;
    fill-opacity: 0.3;
    stroke: #fe4342;
}

.circle:hover {
    cursor: pointer;
    stroke-dasharray: 3.5;
}

.st2 {
    font-family: "sans-serif";
}

.st3 {
    font-size: 8px;
}

.st4 {
    fill: #fe4342;
}

.st5 {
    font-family: "sans-serif";
}

.st6 {
    font-size: 16px;
}

body {
    background-color: #fff;
    font-family: sans-serif;
}

.map {
    font-size: 0;
    position: relative;
}

.map__svg {
    display: block;
    margin: 0 auto;
    position: relative;
    width: 98%;
}

.map__svg .option {
    position: absolute;
    bottom: 20%;
}

.map__svg #btnDiagnosed,
.map__svg #btnDead {
    border-radius: 5px;
    cursor: pointer;
    display: block;
    font-size: 8px;
    margin-bottom: 5px;
    padding: 8px;
    text-transform: uppercase;
    width: 59px;
}

.map__svg #btnDiagnosed {
    background-color: #f6dddd;
    border: 2px solid #fda8a7;
    color: #f14b49;
}

.map__svg #btnDead {
    background-color: #dcdcdc;
    border: 2px solid #bdbdbd;
    color: #424242;
}

.map__svg path,
.map__svg polygon {
    fill: #f6dddd !important;
    stroke: #fda8a7;
    stroke-width: 1px;
    transition: fill 0.3s;
}

.map__svg path:hover,
.map__svg polygon:hover {
    cursor: pointer;
    fill: #fda8a7 !important;
}

.diagnosed path,
.diagnosed polygon {
    fill: #f6dddd !important;
    stroke: #fda8a7;
    stroke-width: 1px;
    transition: fill 0.3s;
}

.diagnosed path:hover,
.diagnosed polygon:hover {
    fill: #fda8a7 !important;
}

.dead path,
.dead polygon {
    fill: #dcdcdc !important;
    stroke: #fff;
    stroke-width: 1px;
    transition: fill 0.3s;
}

.dead path:hover,
.dead polygon:hover {
    fill: #bdbdbd !important;
}

.dead circle {
    fill: #111111;
    fill-opacity: 0.3;
    stroke: #7a7a7a;
}

.dead text {
    fill: #3a3838;
}

.map__options {
    display: none;
    bottom: 0;
    border: 1.5px solid #eee;
    border-radius: 5px;
    padding: 5px;
    position: absolute;
    width: 45%;
}

.container__options {
    position: relative;
}

.container__options #btnClose {
    background-color: #dcdcdc;
    border: 0;
    border-radius: 50%;
    color: #424242;
    font-size: 10px;
    padding: 0;
    position: absolute;
    right: 0;
    width: 13px;
}

.map__options .data-region,
.map__options .data-diagnosed {
    margin-bottom: 10px;
}

.map__options label {
    display: inline-block;
    font-size: 10px;
    /*margin-right: 10px;*/
    vertical-align: middle;
    width: 40%;
}

.map__options input {
    background-color: transparent;
    border: none;
    display: inline-block;
    vertical-align: middle;
    font-size: 10px;
    width: 50%;
}

.active {
    display: block;
}

.disable {
    display: none;
}

@media screen and (min-width: 400px) {

    .map__svg #btnDiagnosed,
    .map__svg #btnDead {
        font-size: 14px;
        width: 90px;
    }
}

@media screen and (min-width: 768px) {
    .map__svg {
        display: inline-block;
        margin: 0;
        vertical-align: top;
        width: 50% !important;
    }

    .dead path,
    .dead polygon {
        stroke: #bdbdbd;
        stroke-width: 1px;
    }

    .map__options {
        border: 0;
        display: inline-block;
        position: relative;
        padding: 0;
        vertical-align: top;
        width: 50%;
    }

    .map__options p {
        font-size: 15px;
    }

    .map__svg #btnDiagnosed,
    .map__svg #btnDead {
        font-size: 10px;
        padding: 10px;
    }

    #btnClose {
        display: none;
    }
}
</style>

<script type="text/javascript">
var BTN__DIAGNOSED = document.getElementById("btnDiagnosed");
var BTN__DEAD = document.getElementById("btnDead");
var PARENT__ELEMENT = document.querySelectorAll(".map__svg")[0];
var INPUT_REGION = document.getElementById("data_region");
var INPUT_DIAGNOSED = document.getElementById("data_diagnosed");
var INPUT_DEAD = document.getElementById("data_dead");
var SVGNS = "http://www.w3.org/2000/svg";
var MAPA_OPTION = document.querySelectorAll(".map__options");
var BTN_CLOSE = document.getElementById("btnClose");
var URL_API =
    "https://content-sheets.googleapis.com/v4/spreadsheets/1rwL-7YO32y6Q1HKmpKPVslojSTjD29XhLOmKOPaMA7I/values/A31:C56?access_token=AIzaSyBX7qxcPfD6AFjCbEqvv8R7GLZ9HQ4j3lo&key=AIzaSyBX7qxcPfD6AFjCbEqvv8R7GLZ9HQ4j3lo";
var STORAGE__API = JSON.parse(localStorage.getItem("api"));
var REGION__TEXT = document.querySelectorAll("#peru_svg .regionText");

function init() {
    console.log("======== callback initial");
    //INPUT_REGION.value = localStorage.getItem("region");
    //INPUT_REGION.setAttribute(value, localStorage.getItem("region"));

    var paths = document.querySelectorAll("#peru_svg path");
    var paths__a = document.querySelectorAll("#peru_svg a");
    var circles = document.querySelectorAll("#peru_svg circle");

    const datosApi = async function() {
        const res = await getDataApi(URL_API);
        localStorage.setItem("api", JSON.stringify(res));
    };

    datosApi();

    paths__a.forEach(function(path) {
        path.onclick = printData;
    });
    //initilial print data
    printRegionText(1);
}

async function getDataApi(url) {
    const res = await fetch(url);
    const json = await res.json();
    if (res.status !== 200) throw Error(`url incorrect: ${url}!!`);
    return json;
}

function printData(path) {
    var region = this.getAttribute("data-region");
    var data = filterData(region);
    console.log("elegistes : ", data);
    localStorage.setItem("region", data[0][0]);
    localStorage.setItem("diagnosed", data[0][1]);
    localStorage.setItem("dead", data[0][2]);

    INPUT_REGION.value = localStorage.getItem("region");
    INPUT_DIAGNOSED.value = localStorage.getItem("diagnosed");
    INPUT_DEAD.value = localStorage.getItem("dead");

    MAPA_OPTION[0].classList.add("active");
}

function filterData(region) {
    return STORAGE__API.values.filter(item => item[0] === region);
}

function closeModal() {
    var child = document.querySelectorAll(".active")[0];
    if (child) {
        MAPA_OPTION[0].classList.remove("active");
    }
}

function printRegionText(type) {
    REGION__TEXT.forEach(function(item) {
        var region = item.getAttribute("data-region");
        var data = filterData(region);
        item.innerHTML = data[0][type];
    });
}

function fnDiagnosed() {
    var child = document.querySelectorAll(".dead")[0];
    if (child) {
        PARENT__ELEMENT.classList.remove("dead");
        PARENT__ELEMENT.classList.add("diagnosed");
    } else {
        PARENT__ELEMENT.classList.add("diagnosed");
    }
    printRegionText(1);
}

function fnDead() {
    var child = document.querySelectorAll(".diagnosed")[0];
    if (child) {
        PARENT__ELEMENT.classList.remove("diagnosed");
        PARENT__ELEMENT.classList.add("dead");
    } else {
        PARENT__ELEMENT.classList.add("dead");
    }

    printRegionText(2);
}

BTN__DIAGNOSED.onclick = fnDiagnosed;
BTN__DEAD.onclick = fnDead;
BTN_CLOSE.onclick = closeModal;

setTimeout(function() {
    init();
}, 100);
</script>

@endsection