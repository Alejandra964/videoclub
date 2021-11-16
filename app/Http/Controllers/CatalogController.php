<?php

namespace App\Http\Controllers;

use App\Models\pelicula;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $arrayPeliculas = pelicula::all();
        return view('catalog.index',['arrayPeliculas'=>$arrayPeliculas]);
    }

    public function getShow($id)
    {
        $pelicula = pelicula::find($id);
        return view('catalog.show',['pelicula'=>$pelicula]);
    }

    public function getCreate()
    {
        return view('catalog.create');
    }
    public function postCreate(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required',
            'year' => 'required|numeric',
            'director' => 'required',
            'poster' => 'required',
            'sinopsis' => 'required'
        ]);
        $pelicula = new pelicula();
        $pelicula->titulo = $request->input('titulo');
        $pelicula->year = $request->input('year');
        $pelicula->director = $request->input('director');
        $path = $request->file('poster')->store('posters','public');
        $pelicula->poster = $path;
        $pelicula->rentada = $request->input('rentada')!==null?1:0;
        $pelicula->sinopsis = $request->input('sinopsis');
        $pelicula->save();
        return redirect('/catalog');
        //dd($request->all());
    }
    /*private $arrayPeliculas = array(
		array(
			'titulo' => 'El padrino',
			'year' => '1972',
			'director' => 'Francis Ford Coppola',
			'poster' => 'http://www.todojuegos.com/modules/coppermine/albums/userpics/10002/GODFgenPFT.jpg',
			'rentada' => false,
			'sinopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
		),
		array(
			'titulo' => 'El Padrino. Parte II',
			'year' => '1974',
			'director' => 'Francis Ford Coppola',
			'poster' => 'http://pics.filmaffinity.com/El_padrino_Parte_II-617901053-large.jpg',
			'rentada' => false,
			'sinopsis' => 'Continuación de la historia de los Corleone por medio de dos historias paralelas: la elección de Michael Corleone como jefe de los negocios familiares y los orígenes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegó a ser un poderosísimo jefe de la mafia de Nueva York.'
		),
		array(
			'titulo' => 'La lista de Schindler',
			'year' => '1993',
			'director' => 'Steven Spielberg',
			'poster' => 'http://pics.filmaffinity.com/La_lista_de_Schindler-473662617-main.jpg',
			'rentada' => false,
			'sinopsis' => 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones públicas, organiza un ambicioso plan para ganarse la simpatía de los nazis. Después de la invasión de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente. Su gerente (Ben Kingsley), también judío, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.'
		),
		array(
			'titulo' => 'Pulp Fiction',
			'year' => '1994',
			'director' => 'Quentin Tarantino',
			'poster' => 'http://pics.filmaffinity.com/Pulp_Fiction-210382116-large.jpg',
			'rentada' => true,
			'sinopsis' => 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misión: recuperar un misterioso maletín. '
		),
		array(
			'titulo' => 'Cadena perpetua',
			'year' => '1994',
			'director' => 'Frank Darabont',
			'poster' => 'http://pics.filmaffinity.com/Cadena_perpetua-576140557-large.jpg',
			'rentada' => true,
			'sinopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank. Con el paso de los años conseguirá ganarse la confianza del director del centro y el respeto de sus compañeros de prisión, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.'
		),
		array(
			'titulo' => 'El golpe',
			'year' => '1973',
			'director' => 'George Roy Hill',
			'poster' => 'http://pics.filmaffinity.com/El_golpe-333620255-large.jpg',
			'rentada' => false,
			'sinopsis' => 'Chicago, años treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso gángster (Robert Shaw). Para ello urdirán un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos.'
		)

	);*/


    public function getEdit($id)
    {
        return view('catalog.edit');
    }


}
