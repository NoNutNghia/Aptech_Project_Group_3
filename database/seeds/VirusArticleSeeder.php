<?php

use Illuminate\Database\Seeder;
use App\Models\VirusArticleModel;
use App\Models\VirusDetailModel;

class VirusArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        VirusArticleModel::create([
            'name' => 'Ebola Virus',
            'year_originated' => 1976,
            'type_id' => 1,
            'img' => 'Ebola Virus/Ebola_virus_virion.jpg',
            'img_detail' => 'Ebola Virus/481844255.0.0.jpg',
            'img_precaution' => 'Ebola Virus/ebola-info.jpg',
            'description' => 'Ebola Virus virus belongs to the genus Ebolavirus, capable of infecting and causing disease in humans, primates including monkeys, gorillas and chimpanzees. Several strains of the Ebolavirus family that are highly infectious in humans include Ebola Virus, Sudan, Tai Forest and Bundibugyo viruses.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Africa',

            'detail_description' => ' - Ebola Virus virus (EVD) is also known as Ebola Virus hemorrhagic fever (EHF). EVD can cause an acute illness, dangerous to human health and has a very high mortality rate if not treated promptly. When infected with Ebola Virus virus, the immune system and vital organs in the body will be attacked and severely damaged. In addition, it also reduces clotting factors, causing uncontrolled bleeding.
            - Ebola Virus first appeared in 1976, after two simultaneous outbreaks- one in Nzara, South Sudan and the other in Yambuku, DRC. The latter happened in a village near the Ebola Virus River, so the disease was named after the river.
            - The 2014-2016 pandemic in West Africa was the largest Ebola Virus outbreak since the virus was first detected in 1976. The outbreak began in Guinea and then spread across land borders to Sierra Leone and Liberia. This was followed by the 2018-2019 Ebola Virus outbreak in the east of the DRC (Democratic Republic of the Congo) with very complicated developments, which brought about insecurity along with serious consequences for the health of the community.
            - The Filoviridae family of viruses includes three genera: Cuevavirus, Marburgvirus, and Ebolavirus. Within the genus Ebolavirus, six species have been identified: Zaire, Bundibugyo, Sudan, Taï Forest, Reston and Bombali. In particular, the virus that caused the outbreak in West Africa in 2014 belonged to the species Zaire ebolavirus.',

            'spread' => '-The researchers have shown that fruit bats of the family Pteropodidae are natural hosts for the Ebola Virus virus. This virus enters the human body through close contact with the blood, secretions, organs or other bodily fluids of infected animals such as fruit bats, chimpanzees, gorillas, antelopes and antelopes. forest, the hedgehog is sick or dead.
            - Ebola Virus virus disease is not airborne and is not spread by casual contact, such as being near an infected person. Unlike respiratory illnesses, which can be spread by airborne particles after an infected person coughs or sneezes, Ebola Virus is spread through direct contact with the bodily fluids of an infected person.
            - Ebola Virus is transmitted from person to person through direct contact (through broken skin or mucous membranes in the eyes, nose, or mouth) with:
              + Blood or body fluids of someone who is sick or has died from Ebola Virus.
              + Subjects have been contaminated with bodily fluids (such as blood, feces, vomit) from a person with Ebola Virus or the body of a person who died of Ebola Virus.
              + Objects (such as clothing, linens, needles, and medical equipment) that are contaminated with bodily fluids from a person who is sick or has died from EVD.
              + Semen from a man who has recovered from EVD (through oral, vaginal, or anal sex). The virus can survive in some body fluids (including semen) of a patient who has recovered from EVD, even if they no longer have severe  symptoms.
            -Healthcare workers who are treating suspected or confirmed Ebola Virus patients can also become infected through close contact with the patient. Infection prevention and control measures are not strictly followed.
            -Furthermore, Ebola Virus can be transmitted through burial rituals that directly involve the body of a person who has died from the disease.
            -Remember, the disease can be transmitted at any time from person to person as long as their blood contains the Ebola Virus virus. Pregnant women with acute Ebola Virus infection and who have recovered from the disease can still carry the virus in their breast milk, or in fluids and tissues associated with pregnancy. This poses a risk of transmission to the child and to those around him.',

            'number_of_infections' => 1201,

            'number_of_death' => 672,

            'precaution_required' => '-There is currently no vaccine and no specific treatment for Ebola Virus.
            - Don\'t travel to countries with Ebola Virus outbreaks unnecessarily. Countries with Ebola Virus outbreaks: Guinea, Liberia, Sierra Leone, Nigeria.
            - If you have to go, you need to find out information about the Ebola Virus epidemic situation at the destination to take measures to prevent infection for yourself.
            - Maintain personal hygiene, wash hands frequently with soap and sanitizer.
            - Avoid direct contact with blood, secretions, objects of people, animals infected with Ebola Virus.
            - Avoid direct contact with people who have Ebola Virus. When needing to come into contact with sick people, they must wear a specialized mask, wear personal protective clothing properly and keep a distance when in contact.
            - People returning from West African countries, within 21 days if they have signs of fever, fatigue, muscle pain, headache, sore throat, diarrhea, rash... or have had close contact with someone showing signs of symptoms. As above, it is necessary to immediately go to the nearest medical facility for advice, examination and testing.
            - Regularly update information and ways to prevent Ebola Virus from the Department of Preventive Medicine, the Ministry of Health on the website http://vncdc.gov.vn and other official information.'
        ]);

//        VirusArticleModel::create([
//            'name' => '',
//            'year_originated' => ,
//            'type_id' => ,
//            'img' => '',
//            'img_description' => '',
//            'img_precaution' => '',
//            'description' => ''
//        ]);
//
//        VirusDetailModel::create([
//            'location_of_origin' => '',
//            'detail_description' => '',
//            'spread' => '',
//            'number_of_infections' => ,
//            'number_of_death' => ,
//            'precaution_required' => ''
//        ]);
//
//        VirusArticleModel::create([
//            'name' => '',
//            'year_originated' => ,
//            'type_id' => ,
//            'img' => '',
//            'img_description' => '',
//            'img_precaution' => '',
//            'description' => ''
//        ]);
//
//        VirusDetailModel::create([
//            'location_of_origin' => '',
//            'detail_description' => '',
//            'spread' => '',
//            'number_of_infections' => ,
//            'number_of_death' => ,
//            'precaution_required' => ''
//        ]);
//
//        VirusArticleModel::create([
//            'name' => '',
//            'year_originated' => ,
//            'type_id' => ,
//            'img' => '',
//            'img_description' => '',
//            'img_precaution' => '',
//            'description' => ''
//        ]);
//
//        VirusDetailModel::create([
//            'location_of_origin' => '',
//            'detail_description' => '',
//            'spread' => '',
//            'number_of_infections' => ,
//            'number_of_death' => ,
//            'precaution_required' => ''
//        ]);
//
//        VirusArticleModel::create([
//            'name' => '',
//            'year_originated' => ,
//            'type_id' => ,
//            'img' => '',
//            'img_description' => '',
//            'img_precaution' => '',
//            'description' => ''
//        ]);
//
//        VirusDetailModel::create([
//            'location_of_origin' => '',
//            'detail_description' => '',
//            'spread' => '',
//            'number_of_infections' => ,
//            'number_of_death' => ,
//            'precaution_required' => ''
//        ]);
//
//        VirusArticleModel::create([
//            'name' => '',
//            'year_originated' => ,
//            'type_id' => ,
//            'img' => '',
//            'img_description' => '',
//            'img_precaution' => '',
//            'description' => ''
//        ]);
//
//        VirusDetailModel::create([
//            'location_of_origin' => '',
//            'detail_description' => '',
//            'spread' => '',
//            'number_of_infections' => ,
//            'number_of_death' => ,
//            'precaution_required' => ''
//        ]);

    }
}
