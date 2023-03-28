<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private array $series = [
        'Lost' => [
            'pays d origine' => '🇺🇸',
            'Années de diffusion :' => 2004,
            'Genre' => 'Aventures, science-fiction, drame',
            'Synopsis' => 'Le vol 815 de la compagnie Oceanic Airlines, reliant Sydney à Los Angeles, explose en plein vol au-dessus d une île du Pacifique non répertoriée sur les cartes. Le 
             cockpit, l avant ainsi que la queue de l appareil tombent en
              des endroits différents de l île, où les survivants vont
               apprendre à cohabiter et survivre. Dès les premiers jours, ils se rendent compte qu ils ne sont pas seuls sur ce bout de terre, qui est le théâtre d évènements étranges : activité magnétique intense, ours polaires rodant dans la jungle, apparitions de revenants, monstre inconnu (fumée noire) errant dans la jungle ou encore indigènes hostiles surnommés Les Autres (The Others) qui agissent sous l influence d un certain Jacob, un chef mystique...',
        ],
        'Heroes' => [
            'pays d origine' => '🇺🇸',
            'Années de diffusion :' =>     2006,
            'Genre' => 'Feuilleton dramatique
            Science-fiction',
            'Synopsis' => "Récemment, des individus sans aucun lien entre eux ont manifesté des dons pour le moins particuliers. Même s'ils n'en ont pas encore conscience, ces individus vont sauver le monde et le changer à jamais. Ce passage de l'ordinaire à l'extraordinaire ne se fera pas du jour au lendemain. Toute histoire a un début, le tome un de leur épopée commence ainsi…Heroes est une chronique de la vie de ces personnes, de leurs liens et de leur destinée : sauver le monde de l'explosion qui menace. Finalement, on découvre que c'est Peter, le plus puissant d'entre eux, qui va exploser à Kirby Plaza, causant des milliers de morts, mais Nathan, son frère, le prend dans ses bras et s'envole loin pour empêcher le drame.",
        ], 'Gotham' => [
            'pays d origine' => '🇺🇸',
            'Années de diffusion :' => 2004,
            'Genre' => "Série d'action
            dramatique
            policière",
            'Synopsis' => "Gotham City est une ville rongée par la criminalité, les politiciens et les policiers sont corrompus par les mafieux pour qu'ils détournent les yeux et leur laissent le contrôle des rues et des affaires. Mais une nuit, Thomas et Martha Wayne, un couple de milliardaires humanistes, sont tués dans une ruelle de Gotham sous les yeux de leur fils unique, Bruce Wayne. L'inspecteur James Gordon, l'un des rares policiers intègres de la ville et récemment muté, jure de retrouver le coupable. Il ignore que cet assassinat va déclencher une guerre entre les gangs de Carmine Falcone et Salvatore Maroni, un bain de sang dont comptent tirer profit Fish Mooney, lieutenant de longue date de Falcone qui rêve de prendre le contrôle de son empire, et Oswald Cobblepot, un homme de main de Mooney prêt à tout pour devenir le numéro 1.",
        ],
    ];
    public function index()
    {
        return view('blog')->with(['series' => $this->series]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'annees' => 'required|numeric',
            'pays' => 'required|in:france',
            'genre' => 'required|string',
            'synopsis' => 'required|string',

        ]);


        $nom = $request->input('nom');
        $pays = $request->input('pays');
        $annees = $request->input('annees');
        $genre = $request->input('genre');
        $synopsis = $request->input('synopsis');
        if ($request->hasFile('image')) {
            // Valider le fichier image
            $validatedData = $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif'
            ]);
        }



        return view('series/showSerie')
            ->with('nom', $nom)
            ->with('pays', $pays)
            ->with('annees', $annees)
            ->with('genre', $genre)
            ->with('synopsis', $synopsis);
    }

    /**
     * Display the specified resource.
     */
    public function show($nom)
    {
        // Récupérer les détails de la série sélectionnée
        $details = $this->series[$nom];

        // Retourner la vue avec les détails de la série
        return view('series.show', compact('nom', 'details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nom)
    {
        unset($this->series[$nom]);
        return redirect()->route('blog.index');
    }
}
