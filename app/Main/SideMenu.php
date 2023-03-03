<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'dashboard',
                'params' => [
                    'layout' => 'side-menu'
                ],
            ],
            'eleves' => [
                'icon' => 'users',
                'title' => 'Eleves',
                'sub_menu' => [
                    'eleves-liste' => [
                        'icon' => '',
                        'route_name' => 'eleves',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Voir Les Elèves'
                    ],
                    'eleves-create' => [
                        'icon' => '',
                        'route_name' => 'eleve.create',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Enregistrer un Elève'
                    ],
                    'eleves-cartes' => [
                        'icon' => '',
                        'route_name' => 'eleve.cartes',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Cartes'
                    ],
                    'import.eleve.salle' => [
                        'icon' => '',
                        'route_name' => 'import.eleve.salle',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Importer'
                    ]

                ]
            ],
            'devider',
            'academique' => [
                'icon' => 'map-pin',
                'title' => 'Etablissement',
                'sub_menu' => [
                    'annees' => [
                        'icon' => '',
                        'route_name' => 'academique.annees',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Années Scolaires'
                    ],

                    'cycles' => [
                        'icon' => '',
                        'route_name' => 'academique.cycles',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Cycles Academiques'
                    ],

                    'classes' => [
                        'icon' => '',
                        'route_name' => 'academique.classes',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Classes'
                    ],
                    'sections' => [
                        'icon' => '',
                        'route_name' => 'academique.sections',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Sections'
                    ],
                    'matieres' => [
                        'icon' => '',
                        'route_name' => 'academique.matieres',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Matières'
                    ],
                    'cours' => [
                        'icon' => '',
                        'route_name' => 'academique.cours',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Liste des Cours'
                    ]
                    
                ]
            ],
            'Timetables' => [
                'icon' => 'table',
                'title' => 'Emploi du Temps',
                'sub_menu' => [
                    'allPlanning' => [
                        'icon' => '',
                        'route_name' => 'academique.timetables',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Planifier'
                    ],
                    'planningEnseignant' => [
                        'icon' => '',
                        'route_name' => 'academique.timetable.enseignant',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Planning Enseignant'
                    ],
                    'planningClasse' => [
                        'icon' => '',
                        'route_name' => 'academique.timetable.salle',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Planning par Classe'
                    ],
                ]
            ],
            'evaluation' => [
                'icon' => 'edit',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Evaluations',
                'sub_menu' => [
                    'periodes' => [
                        'icon' => '',
                        'route_name' => 'periodes',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Periodes'
                    ],
                    'examen' => [
                        'icon' => '',
                        'route_name' => 'examens',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Examens'
                    ],
                    'devoirs' => [
                        'icon' => '',
                        'route_name' => 'devoirs',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Devoirs'
                    ],
                    'compositions' => [
                        'icon' => '',
                        'route_name' => 'compositions',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Compositions'
                    ],
                    'examen_blanc' => [
                        'icon' => '',
                        'route_name' => 'examen_blanc',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Examen Blanc'
                    ],
                    /*'notes.resultats.merite' => [
                        'icon' => '',
                        //'route_name' => '',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Par Ordre de Merite'
                    ],*/
                ]
            ],
            /*'programme' => [
                'icon' => 'briefcase',
                'title' => 'Programmes',
                'sub_menu' => [
                    'programme.index' => [
                        'icon' => '',
                        'route_name' => 'programmes',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Voir les Programmes'
                    ],
                    'programme.create' => [
                        'icon' => '',
                        'route_name' => 'programme.create',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Ajouter un Programme'
                    ]
                    
                ]
            ],
            */
            'payement' => [
                'icon' => 'dollar-sign',
                'title' => 'Payements',
                'category' => 'f_admin',
                'sub_menu' => [
                    'payement.ecolage' => [
                        'icon' => '',
                        'route_name' => 'payement.ecolage',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Ecolage'
                    ],
                    
                    'import.payement.salle' => [
                        'icon' => '',
                        'route_name' => 'import.payement.salle',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Importer Payement'
                    ],


                    'payement.historique' => [
                        'icon' => '',
                        'route_name' => 'payement.historique',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Historique Payement'
                    ],
                    'payement.parametre.ecolage' => [
                        'icon' => '',
                        'route_name' => 'payement.parametre.ecolage',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Parametres Ecolage'
                    ],
                    
                ]
            ],
            'finances' => [
                'icon' => 'pocket',
                'title' => 'Finances',
                'category' => 'f_admin',
                'sub_menu' => [
                    /*'finance.overview' => [
                        'icon' => '',
                        'route_name' => 'finance.overview',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Finances'
                    ],*/
                    'finance.depenses' => [
                        'icon' => '',
                        'route_name' => 'finance.depenses',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Depenses'
                    ],
                    'finance.revenus' => [
                        'icon' => '',
                        'route_name' => 'finance.revenus',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Revenus'
                    ],
                    'finance.salaires' => [
                        'icon' => '',
                        'route_name' => 'finance.salaires',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Salaires'
                    ],
                    'finances.rapport' => [
                        'icon' => '',
                        'title' => 'Rapports Finances',
                        'sub_menu' => [
                            'rapport.finance.ecolage' => [
                                'icon' => '',
                                'route_name' => 'rapport.finance.ecolage',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Rapport Ecolage'
                            ],
                            'rapport.finance.finance' => [
                                'icon' => '',
                                'route_name' => 'rapport.finance.finance',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Rapport Financier'
                            ],
                        ],
                    ],

                ]
            ],
            'personnels' => [
                'icon' => 'user',
                'title' => 'Personnels',
                'sub_menu' => [
                    'personnel.index' => [
                        'icon' => '',
                        'route_name' => 'personnels',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Afficher le Personnel'
                    ],
                    'personnel.create' => [
                        'icon' => '',
                        'route_name' => 'personnel.create',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Ajouter du Personnel'
                    ]
                ]
            ],
            'statistiques' => [
                'icon' => 'pie-chart',
                'title' => 'Rapports',
                'sub_menu' => [
                    'rapport.eleves' => [
                        'icon' => '',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Eleves',
                        'sub_menu' => [
                            'rapport.eleves.liste-presence' => [
                                'icon' => '',
                                'route_name' => 'rapport.eleve.liste.presence',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Liste de Présence'
                            ],
                            'rapport.eleves.blank-liste' => [
                                'icon' => '',
                                'route_name' => 'rapport.eleve.liste.blank',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Liste Vide'
                            ],
                            'rapport.eleves.population' => [
                                'icon' => '',
                                'route_name' => 'rapport.eleve.stat-population',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Statistiques'
                            ],
                            /*'rapport.eleves.programme' => [
                                'icon' => '',
                                //'route_name' => '',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Par Ordre de Merite'
                            ],*/
                        ]
                    ],
                    'rapport.personnel' => [
                        'icon' => '',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Personnel',
                        'sub_menu' => [
                            'rapport.personnel.liste' => [
                                'icon' => '',
                                'route_name' => 'rapport.personnel.liste',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Liste du Personnel'
                            ],
                            'rapport.personnel.liste.titulaire' => [
                                'icon' => '',
                                'route_name' => 'rapport.personnel.liste.titulaire',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Liste des Titulaires'
                            ],
                        ]
                    ],
                    /*'rapport.resultats' => [
                        'icon' => '',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Notes et Resultats',
                        'sub_menu' => [
                            'rapport.resultats.graphique' => [
                                'icon' => '',
                                //'route_name' => '',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Apercu Graphique'
                            ],
                            'rapport.resultats.statistiques' => [
                                'icon' => '',
                                //'route_name' => '',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Statistiques Academique'
                            ],
                            'rapport.resultats.fiches.techniques' => [
                                'icon' => '',
                                //'route_name' => '',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Fiches Techniques'
                            ],
                            'rapport.resultats.merite' => [
                                'icon' => '',
                                //'route_name' => '',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Par Ordre de Merite'
                            ],
                        ]
                    ],
                    'rapport.payement' => [
                        'icon' => '',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Payement',
                        'category' => 'f_admin',
                        'sub_menu' => [
                            'rapport.payement.progression' => [
                                'icon' => '',
                                'route_name' => 'rapport.payement.progression',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Progression Payement'
                            ],
                        ]
                    ],*/
                ]
            ],
            'devider',
            'administration' => [
                'icon' => 'settings',
                'route_name' => 'administration',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Administration',
            ],
            /*
            'database' => [
                'icon' => 'database',
                'title' => 'Base de Données',
                'sub_menu' => [
                    'database.save' => [
                        'icon' => '',
                        'route_name' => 'database.sauvegarde',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Sauvegarde'
                    ],
                    'database.backup' => [
                        'icon' => '',
                        'route_name' => 'database.recuperation',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Récuperation'
                    ]
                ]
            ],*/
            /*
            'guide' => [
                'icon' => 'book-open',
                'title' => 'Guide',
                //'route_name' => 'academique.timetables',
                'sub_menu' => [
                    'about.guide' => [
                        'icon' => '',
                        //'route_name' => 'database.sauvegarde',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Guide Utilisateur'
                    ],
                    'about.cuf' => [
                        'icon' => '',
                        //'route_name' => 'database.recuperation',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Contrat D\'Utilisation'
                    ],
                    'about.logiciel' => [
                        'icon' => '',
                        //'route_name' => 'database.recuperation',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'A propos'
                    ]
                ]
            ],
            */
        ];
    }
}
