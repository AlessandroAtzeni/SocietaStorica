
@extends('layout')


  @section('content')

  <div class="image">

  </div>

  <div class="layer">
    <h1>Benvenuti</h1>
    <h3>nel nuovo sito della Società Storica Chivassese</h3>
  </div>

      <!-- <div class="paragraph"> -->

  <div class="quote">
    <p class="introduce">
      Amiamo la Storia. Vogliamo farla amare anche a voi.
    </p>
  </div>

  <div class="ssc">
    <img src="https://placehold.it/300x250"/>
    <p>
      La Società Storica Chivassese è un’associazione senza scopo di lucro (onlus) fondata per volontà del comune di Chivasso e di un gruppo di studiosi e appassionati di storia locale nel dicembre del 2005, perfezionata poi con statuto nel marzo del 2008.

      La società è costituita da un Consiglio Direttivo formato dagli otto soci fondatori (Bertolino Gianni, Bosso Davide, Germani Alessandro, Isella Pier Giorgio, Pasteris Bruno, Spegis Fabrizio, Torchio Stefania, Vaj Camillo), all’interno del quale sono stati eletti nella funzione di presidente, vice-presidente, segretario e tesoriere i signori.
    </p>
  </div>

  <div class="tiles">

    <div class="caption">
      <img class="caption__media" src="{{ URL::asset('css/immagini/Vaccinazione.jpg') }}" />
      <div class="caption__overlay">
        <h1><a href="">Le nostre pubblicazioni</a></h1>
        <p>Lorem ipsum doler sit dui amet.</p>
      </div>
    </div>

    <div class="caption">
      <img class="caption__media" src="{{ URL::asset('css/immagini/Mappa2.jpg') }}" />
      <div class="caption__overlay">
        <h1><a href="">La nostra citt&agrave;</a></h1>
        <p>Lorem ipsum doler sit dui amet.</p>
      </div>
    </div>

    <div class="caption">
      <img class="caption__media" src="{{ URL::asset('css/immagini/Battaglia.jpg') }}" />
      <div class="caption__overlay">
        <h1><a href="">Archivio</a></h1>
        <p>Lorem ipsum doler sit dui amet.</p>
      </div>
    </div>
  </div>

  @endsection
