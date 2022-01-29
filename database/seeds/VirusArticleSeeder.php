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
            'type_id' => 2,
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

        VirusArticleModel::create([
            'name' => 'Yersinia pestis',
            'year_originated' => 1894,
            'type_id' => 6,
            'img' => 'Yersinia pestis/Yersinia_pestis_fluorescent.jpeg',
            'img_detail' => 'Yersinia pestis/yersinia.jpg',
            'img_precaution' => 'Yersinia pestis/bubonic-plague.jpg',
            'description' => 'Yersinia pestis (Y. pestis, formerly Pasteurella pestis) is a gram-negative, non-motile, coccobacillus bacterium without spores that is related to both Yersinia pseudotuberculosis and Yersinia enterocolitica. It is a facultative anaerobic organism that can infect humans via the Oriental rat flea (Xenopsylla cheopis). It causes the disease plague, which caused the First plague pandemic and the Black Death, the deadliest pandemic in recorded history. Plague takes three main forms: pneumonic, septicemic, and bubonic.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'In or near China',

            'detail_description' => '- Yersinia pestis (Y. pestis) (formerly Pasteurella pestis) is a gram-negative, non-motile, coccobacillus bacterium without spores that is related to both Yersinia pseudotuberculosis and Yersinia enterocolitica. It is a facultative anaerobic organism that can infect humans via the Oriental rat flea (Xenopsylla cheopis). It causes the disease plague, which caused the first plague pandemic and the Black Death, the deadliest pandemic in recorded history. Plague takes three main forms: pneumonic, septicemic, and bubonic.
            - Y.pestis was discovered in 1894 by Alexandre Yersin, a Swiss/French physician and bacteriologist from the Pasteur Institute, during an epidemic of the plague in Hong Kong. Yersin was a member of the Pasteur school of thought. Kitasato Shibasaburō, a Japanese bacteriologist who practised Koch\'s methodology, was also engaged at the time in finding the causative agent of the plague. However, Yersin actually linked plague with a bacillus, initially named Pasteurella pestis; it was renamed Yersinia pestis in 1944.
            - Every year, thousands of cases of the plague are still reported to the World Health Organization. With proper antibiotic treatment, the prognosis for victims is much better than before antibiotics were developed. A five- to six-fold increase in cases occurred in Asia during the time of the Vietnam War, possibly due to the disruption of ecosystems and closer proximity between people and animals. The plague is now commonly found in sub-Saharan Africa and Madagascar, areas that now account for over 95% of reported cases. The plague also has a detrimental effect on non-human mammals; in the United States, these include the black-tailed prairie dog and the endangered black-footed ferret.',

            'spread' => '- Transmission of Y.pestis to an uninfected individual is possible by any of the following means:
            + Droplet contact – coughing or sneezing on another person
            + Direct physical contact – touching an infected person, including sexual contact
            + Indirect contact – usually by touching soil contamination or a contaminated surface
            + Airborne transmission – if the microorganism can remain in the air for long periods
            + Fecal-oral transmission – usually from contaminated food or water sources
            + Vector borne transmission – carried by insects or other animals.',

            'number_of_infections' => 100000000,
            'number_of_death' => 75000000,

            'precaution_required' => '- Although there have been no recorded cases of Plague in recent years, for the safety of the whole community, disease prevention is indispensable. According to the recommendations of the Department of Preventive Medicine, the Ministry of Health, people need to regularly monitor the results of epidemic epidemiological surveillance to actively prevent the disease.
            - When seeing many unusual deaths of rats, people need to immediately report to the nearest health agency and absolutely do not kill rats and fleas when there is an epidemic in mice and humans. In animal endemic areas, dogs and cats should be periodically treated with an appropriate insecticide.
            - In addition, people also need to actively clean the environment and places to live, to avoid letting rats crawl and nest. Eat cooked, drink boiled and must ensure that food and food are covered securely to avoid contact with rats. When having symptoms of suspected infection, people need to go to medical facilities for timely examination and treatment.'
        ]);

        VirusArticleModel::create([
            'name' => 'Epstein–Barr',
            'year_originated' => 1961,
            'type_id' => 3,
            'img' => 'Epstein Barr/Epstein_Barr_Virus_virions_EM_10.1371_journal.pbio.0030430.g001-L.jpeg',
            'img_detail' => 'Epstein Barr/maxresdefault.jpg',
            'img_precaution' => 'Epstein Barr/mononucleosis-causes-50-5ae7754a0e23d90039f2cdbd.png',
            'description' => 'The Epstein–Barr virus (EBV), formally called Human gammaherpesvirus 4, is one of the nine known human herpesvirus types in the herpes family, and is one of the most common viruses in humans. EBV is a double-stranded DNA virus.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Uganda',
            'detail_description' => '- It is best known as the cause of infectious mononucleosis ("mono" or "glandular fever"). It is also associated with various non-malignant, premalignant, and malignant Epstein–Barr virus-associated lymphoproliferative diseases such as Burkitt lymphoma, hemophagocytic lymphohistiocytosis, and Hodgkin\'s lymphoma; non-lymphoid malignancies such as gastric cancer and nasopharyngeal carcinoma; and conditions associated with human immunodeficiency virus such as hairy leukoplakia and central nervous system lymphomas. The virus is also associated with the childhood disorders of Alice in Wonderland syndrome and acute cerebellar ataxia and, based on some evidence, higher risks of developing certain autoimmune diseases, especially dermatomyositis, systemic lupus erythematosus, rheumatoid arthritis, Sjögren\'s syndrome, and multiple sclerosis. About 200,000 cancer cases globally per year are thought to be attributable to EBV. In 2022, it was shown that recent EBV infection causes a 32-fold increase in the risk of developing multiple sclerosis.
            - EBV infects B cells of the immune system and epithelial cells. Once EBV\'s initial lytic infection is brought under control, EBV latency persists in the individual\'s B cells for the rest of their life.',
            'spread' => '- Infection with EBV occurs by the oral transfer of saliva and genital secretions. Most people become infected with EBV and gain adaptive immunity. In the United States, about half of all five-year-old children and about 90% of adults have evidence of previous infection. Infants become susceptible to EBV as soon as maternal antibody protection disappears. Many children become infected with EBV, and these infections usually cause no symptoms or are indistinguishable from the other mild, brief illnesses of childhood. In the United States and other developed countries, many people are not infected with EBV in their childhood years. When infection with EBV occurs during adolescence, it causes infectious mononucleosis 35 to 50% of the time.',
            'number_of_infections' => 14420000,
            'number_of_death' => 973000,

            'precaution_required' => '- The way to prevent the harmful effects of Epstein-Barr is to live a healthy and hygienic life; strengthen resistance by diet, reasonable, daily practice date. In particular, it is necessary to disinfect regularly from alkaline solutions; Good sore throat is treated according to the doctor\'s prescription.'
        ]);

        VirusArticleModel::create([
            'name' => 'Burkitt lymphoma',
            'year_originated' => 1958,
            'type_id' => 3,
            'img' => 'Burkitt lymphoma/Burkitt_lymphoma,_touch_prep,_Wright_stain.jpg',
            'img_detail' => 'Burkitt lymphoma/maxresdefault.jpg',
            'img_precaution' => 'Burkitt lymphoma/1-Figure1-1.png',
            'description' => 'Burkitt lymphoma is a cancer of the lymphatic system, particularly B lymphocytes found in the germinal center. It is named after Denis Parsons Burkitt, the Irish surgeon who first described the disease in 1958 while working in equatorial Africa. The overall cure rate for Burkitt lymphoma in developed countries is about 90%, and it is worse in low-income countries. Burkitt lymphoma is uncommon in adults, in whom it has a worse prognosis.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Africa',

            'detail_description' => '- Burkitt lymphoma is endemic in Central Africa and accounts for up to 30% of childhood lymphomas in the United States. The African endemic form usually presents with hypertrophy of the jaw or facial bones. In sporadic (non-African) Burkitt lymphoma, abdominal involvement predominates, usually occurring in the ileocecal or mesenteric valve regions. Tumors can cause bowel obstruction. The kidneys, ovaries, or breasts may also become infiltrated. In adults, the disease can be widespread and generally involves invasion of the liver, spleen, and bone marrow. Patients often already have CNS invasion at diagnosis or when the disease recurs.
            - Burkitt lymphoma is the fastest growing tumor in humans, histopathology shows a high mitotic rate, B-cell monoclonal proliferation, "starry sky" appearance of benign macrophages in progress. programmed cell death of malignant lymphocytes. There is a specific genetic translocation involving the C-myc gene on chromosome 8 and the upper immunoglobulin heavy chain on chromosome 14. The disease is closely associated with epidemiological Epstein-Barr virus infection. ; however, it is not clear whether the Epstein-Barr virus is the cause. Burkitt lymphoma commonly occurs in AIDS patients and can be a definitive diagnosis of AIDS.',

            'spread' => '- Human papillomavirus (HPV) infection is the most common sexually transmitted infection and can cause skin warts, genital warts.',

            'number_of_infections' => 570,
            'number_of_death' => 84,
            'precaution_required' => '- There is no cure for lymphoma.'
        ]);

        VirusArticleModel::create([
            'name' => 'Hepatitis B',
            'year_originated' => 1885,
            'type_id' => 4,
            'img' => 'Hepatitis B/Hepatitis-B_virions.jpg',
            'img_detail' => 'Hepatitis B/0058066001600712291.jpg',
            'img_precaution' => 'Hepatitis B/Transmission-Graphic-Asian-and-African-Social-Media-1.png',
            'description' => 'Hepatitis B is an infectious disease caused by the hepatitis B virus (HBV) that affects the liver; it is a type of viral hepatitis. It can cause both acute and chronic infection.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Australia',

            'detail_description' => '- Many people have no symptoms during the initial infection. In acute infection, some may develop a rapid onset of sickness with vomiting, yellowish skin, tiredness, dark urine, and abdominal pain. Often these symptoms last a few weeks and rarely does the initial infection result in death. It may take 30 to 180 days for symptoms to begin. In those who get infected around the time of birth 90% develop chronic hepatitis B while less than 10% of those infected after the age of five do. Most of those with chronic disease have no symptoms; however, cirrhosis and liver cancer eventually develop in about 25% of those with chronic HBV.
            - The virus is transmitted by exposure to infectious blood or body fluids. In areas where the disease is common, Infection around the time of birth or from contact with other people\'s blood during childhood is the most frequent method by which hepatitis B is acquired. In areas where the disease is rare, intravenous drug use and sexual intercourse are the most frequent routes of infection. Other risk factors include working in healthcare, blood transfusions, dialysis, living with an infected person, travel in countries where the infection rate is high, and living in an institution. Tattooing and acupuncture led to a significant number of cases in the 1980s; however, this has become less common with improved sterilization. The hepatitis B viruses cannot be spread by holding hands, sharing eating utensils, kissing, hugging, coughing, sneezing, or breastfeeding. The infection can be diagnosed 30 to 60 days after exposure. The diagnosis is usually confirmed by testing the blood for parts of the virus and for antibodies against the virus. It is one of five main hepatitis viruses: A, B, C, D, and E. During an initial infection, care is based on the symptoms that a person has. In those who develop chronic disease, antiviral medication such as tenofovir or interferon may be useful; however, these drugs are expensive. Liver transplantation is sometimes recommended for cases of cirrhosis.
            - The infection has been preventable by vaccination since 1982. Vaccination is recommended by the World Health Organization in the first day of life if possible. Two or three more doses are required at a later time for full effect. This vaccine works about 95% of the time. About 180 countries gave the vaccine as part of national programs as of 2006. It is also recommended that all blood be tested for hepatitis B before transfusion, and that condoms be used to prevent infection. In 2016, the World Health Organization set a goal of eliminating viral hepatitis as a threat to global public health by 2030. Achieving this goal would require the development of therapeutic treatments to cure chronic hepatitis B, as well as preventing its transmission and using vaccines to prevent new infections.
            - About a third of the world population has been infected at one point in their lives. At least 391 million people, or 5% of the world\'s population, had chronic HBV infection as of 2017. While another 145 million cases of acute HBV infection occurred that year. Over 750,000 people die of hepatitis B each year. About 300,000 of these are due to liver cancer. The disease is most common in the Western Pacific (6.2%) and African (6.1%) regions. In Europe rates are 1.6% and in the Americas they are 0.7%. It was originally known as "serum hepatitis".',

            'spread' => '- Hepatitis B is spread through direct contact with the blood or body fluids of an infected person. Most people with chronic hepatitis B are infected from mother to child during pregnancy or early in life. Hepatitis B is not a genetic disease and is therefore not inherited.',

            'number_of_infections' => 296000000,
            'number_of_death' => 820000,

            'precaution_required' => '- Currently, vaccination against hepatitis B is considered the most effective method of preventing the disease. If the disease has progressed to the chronic stage, drugs can only be used to control the hepatitis B virus status in the body. The WHO recommends that the first hepatitis B vaccine be given as soon as possible: within the first 24 hours after birth, followed by 2 or 3 doses spaced at least 4 weeks apart.
            - Have safe, faithful sex, use condoms to avoid hepatitis B virus infection.'
        ]);

        VirusArticleModel::create([
            'name' => 'Varicella zoster',
            'year_originated' => 1943,
            'type_id' => 3,
            'img' => 'Varicella zoster/Varicella_(Chickenpox)_Virus_PHIL_1878_lores.jpg',
            'img_detail' => 'Varicella zoster/Sabrina-Cappelli-I1_Pathologyo.jpg',
            'img_precaution' => 'Varicella zoster/Treatments-and-prevention-of-varicella-and-herpes-zoster-HZ.png',
            'description' => 'Human alphaherpesvirus 3 (HHV-3), usually referred to as the varicella-zoster virus (VZV), is one of nine herpesviruses known to infect humans. It causes chickenpox (varicella), a disease most commonly affecting children, teens, and young adults, and shingles (herpes zoster) in adults; shingles is rare in children. VZV infections are species-specific to humans, but can survive in external environments for a few hours.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Africa',

            'detail_description' => '- Herpes zoster is caused by the varicella-zoster virus (herpesvirus type 3); Chickenpox is the acute invasive phase of the virus, and herpes zoster (shingles) represents a reactivation of the latent phase.
            - Herpes zoster inflames the sensory nerves, affecting the epidermis of the skin, and sometimes the posterior and anterior horns of the gray matter, meninges, and dorsal nerve roots. Herpes zoster is more common in elderly and HIV-infected patients and is more severe in immunocompromised patients because of the decreased cell-mediated immunity in these patients. There is no obvious precipitate.',

            'spread' => '- Shingles causes blisters to burst, and the varicella-zoster virus can be spread by contact with shingles blisters. If you haven\'t had chickenpox, you can get the varicella-zoster virus from contact with someone else\'s shingles blisters. This could be the cause of your chickenpox.',

            'number_of_infections' => 62246,
            'number_of_death' => 2334,

            'precaution_required' => '- A new recombinant shingles vaccine should be given to adults who have immunity for ≥ 50 years whether they have herpes zoster or not; 2 doses are given 2 to 6 (for more information, see Recommendations of the Advisory Committee on Immunization Practices for Use of Herpes Zoster Vaccines). Newer recombinant vaccines appear to provide better and longer protection than the older, single-dose, shingles vaccine recommended for adults. immunocompetent ≥ 60 years old and licensed for persons ≥ 50 years old. Both vaccines are available, and both have been shown to reduce the incidence of zoster disease although recombinant vaccines are preferred. There are currently no data on the efficacy of the recombinant vaccine in immunocompromised patients and there are no recommendations for its use in immunocompromised patients. Life-deficient vaccines are contraindicated in immunocompromised patients.'
        ]);

        VirusArticleModel::create([
            'name' => 'SARS-CoV-2',
            'year_originated' => 2019,
            'type_id' => 1,
            'img' => 'SARS-CoV-2/Novel_Coronavirus_SARS-CoV-2.jpg',
            'img_detail' => 'SARS-CoV-2/Fphar-11-00937-g001.jpg',
            'img_precaution' => 'SARS-CoV-2/11783_2021_1398_Fig1_HTML.jpg',
            'description' => 'SARS-CoV-2 is a strain of the coronavirus that causes COVID-19 (coronavirus disease 2019), the respiratory disease that causes the ongoing COVID-19 pandemic. This virus was previously provisionally named 2019 novel coronavirus (2019-nCoV), and is also known as human coronavirus 2019 (HCoV-19 or hCoV-19).'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Wuhan, China',

            'detail_description' => '- SARS‑CoV‑2 is a virus of the species severe acute respiratory syndrome–related coronavirus (SARSr-CoV). It is of zoonotic origins and has close genetic similarity to bat coronaviruses, suggesting it emerged from a bat-borne virus. Research is ongoing as to whether SARS‑CoV‑2 came directly from bats or indirectly through any intermediate hosts.The virus shows little genetic diversity, indicating that the spillover event introducing SARS‑CoV‑2 to humans is likely to have occurred in late 2019.
            - Epidemiological studies estimate that, in the December 2019 – September 2020 period, each infection resulted in an average of 2.4 to 3.4 new ones when no members of the community are immune and no preventive measures are taken.The virus primarily spreads between people through close contact and via aerosols and respiratory droplets that are exhaled when talking, breathing, or otherwise exhaling, as well as those produced from coughs or sneezes. It enters human cells by binding to angiotensin converting enzyme 2 (ACE2), a membrane protein that regulates the renin–angiotensin system.',

            'spread' => '- COVID-19 is mainly transmitted when people breathe in air contaminated by droplets and small airborne particles containing the virus. Infected people exhale those particles as they breathe, talk, cough, sneeze, or sing.Transmission is more likely when people are physically close. However, infection can occur over longer distances, particularly indoors.
            - Transmission was initially assumed to occur primarily via respiratory droplets from coughs and sneezes within a range of about 1.8 metres (6 ft). Laser light scattering experiments suggest that speaking is an additional mode of transmission and a far-reachingand under-researchedone, indoors, with little air flow. Other studies have suggested that the virus may be airborne as well, with aerosols potentially being able to transmit the virus. During human-to-human transmission, between 200 and 800 infectious SARS‑CoV‑2 virions are thought to initiate a new infectio. Indirect contact via contaminated surfaces is another possible cause of infection. Preliminary research indicates that the virus may remain viable on plastic (polypropylene) and stainless steel (AISI 304) for up to three days, but it does not survive on cardboard for more than one day or on copper for more than four hours. The virus is inactivated by soap, which destabilizes its lipid bilayer.Viral RNA has also been found in stool samples and semen from infected individuals.',

            'number_of_infections' => 366249339,
            'number_of_death' => 5637614,

            'precaution_required' => '- To prevent the spread of COVID-19:
            + Maintain a safe distance from others (at least 1 metre), even if they don’t appear to be sick.
            + Wear a mask in public, especially indoors or when physical distancing is not possible.
            + Choose open, well-ventilated spaces over closed ones. Open a window if indoors.
            + Clean your hands often. Use soap and water, or an alcohol-based hand rub.
            + Get vaccinated when it’s your turn. Follow local guidance about vaccination.
            + Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.
            + Stay home if you feel unwell.
            - If you have a fever, cough and difficulty breathing, seek medical attention. Call in advance so your healthcare provider can direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.'
        ]);

        VirusArticleModel::create([
            'name' => ' SARS-CoV-1',
            'year_originated' => 2003,
            'type_id' => 1,
            'img' => 'SARS-CoV-1/20200217_091033_493849_covid-10.max-1800x1800.jpg',
            'img_detail' => 'SARS-CoV-1/fmed-07-00310-g001.jpg',
            'img_precaution' => 'SARS-CoV-1/_69308726_sars_doctorsmontage_getty.jpg',
            'description' => 'Corona-virus 1 (SARS-CoV-1 or SARS-CoV) is a strain of coronavirus that causes severe acute respiratory syndrome (SARS), the respiratory illness responsible for the 2002–2004 SARS outbreak. It is an enveloped, positive-sense, single-stranded RNA virus which infects the epithelial cells within the lungs. The virus enters the host cell by binding to angiotensin-converting enzyme 2. It infects humans, bats, and palm civets.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Guangdong, China',

            'detail_description' => '- In March 2003, WHO established a global network of leading laboratories to collaborate in the identification of the causative agent of SARS. Early on, labs in the network narrowed the search to members of the paramyxovirus and coronavirus families. Early findings shared by the labs pointed to coronaviruses with increasing consistency. On 21 March, scientists from the University of Hong Kong announced the isolation of a new virus that was strongly suspected to be the causative agent of SARS.
            - Epidemiological evidence suggested a zoonotic origin of the virus: more than 33% of the first detected cases of SARS in Guangdong corresponded to animal or food handlers. Seroprevalence studies reinforced this zoonotic link (a high proportion of asymptomatic animal handlers at markets in Guangdong Province had antibodies against SARS-CoV).
            - On 12 April 2003, scientists working at the Michael Smith Genome Sciences Centre in Vancouver finished mapping the genetic sequence of a coronavirus believed to be linked to SARS. The team was led by Marco Marra and worked in collaboration with the British Columbia Centre for Disease Control and the National Microbiology Laboratory in Winnipeg, Manitoba, using samples from infected patients in Toronto. Donald Low of Mount Sinai Hospital in Toronto described the discovery as having been made with "unprecedented speed". The sequence of the SARS coronavirus has since been confirmed by other independent groups.
            - Molecular epidemiological research demonstrated the virus isolated in 2002–2003 in south China and the virus isolated in the same area in late 2003 and early 2004 are different, indicating separate species-crossing events. The phylogeny of the outbreak strains shows that the southwestern provinces including Yunnan, Guizhou and Guangxi compare to the human SARS-CoV-1 better than those of the other provinces, but the viruses\' evolution is a product of the host interaction and particularity',

            'spread' => '- The main way that SARS seems to spread is by close person-to-person contact. The virus that causes SARS is thought to be transmitted most readily by respiratory droplets (droplet spread) produced when an infected person coughs or sneezes. Droplet spread can happen when droplets from the cough or sneeze of an infected person are propelled a short distance (generally up to 3 feet) through the air and deposited on the mucous membranes of the mouth, nose, or eyes of persons who are nearby. The virus also can spread when a person touches a surface or object contaminated with infectious droplets and then touches his or her mouth, nose, or eye(s). In addition, it is possible that the SARS virus might spread more broadly through the air (airborne spread) or by other ways that are not now known.',

            'number_of_infections' => 8098,
            'number_of_death' => 774,

            'precaution_required' => '- There is no cure or vaccine for SARS and treatment should be supportive and based on the patient’s symptoms.
            - Controlling outbreaks relies on containment measures including:
            + Prompt detection of cases through good surveillance networks and including an early warning system.
            + Isolation of suspected of probably cases.
            + Tracing to identify both the source of the infection and contacts of those who are sick and may be at risk of contracting the virus.
            + Quarantine of suspected contacts for 10 days.
            + Exit screening for outgoing passengers from areas with recent local transmission by asking questions and temperature measurement.
            + Disinfection of aircraft and cruise vessels having SARS cases on board using WHO guidelines.'
        ]);

        VirusArticleModel::create([
            'name' => 'MERS-CoV',
            'year_originated' => 2012,
            'type_id' => 1,
            'img' => 'MERS-CoV/_85021008_mers97456.jpg',
            'img_detail' => 'MERS-CoV/microorganisms-08-00991-g001-550.jpg',
            'img_precaution' => 'MERS-CoV/mers-infographic.jpg',
            'description' => 'Middle East respiratory syndrome–related coronavirus (MERS-CoV), or EMC/2012 (HCoV-EMC/2012), is the virus that causes Middle East respiratory syndrome (MERS). It is a species of coronavirus which infects humans, bats, and camels. The infecting virus is an enveloped, positive-sense, single-stranded RNA virus which enters its host cell by binding to the DPP4 receptor. The species is a member of the genus Betacoronavirus and subgenus Merbecovirus.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Jeddah, Saudi Arabia',

            'detail_description' => '- The first confirmed case was reported in Jeddah, Saudi Arabia in April 2012.[10] Egyptian virologist Ali Mohamed Zaki isolated and identified a previously unknown coronavirus from the man\'s lungs. Zaki then posted his findings on 24 September 2012 on ProMED-mail. The isolated cells showed cytopathic effects (CPE), in the form of rounding and syncytia formation.
            - A second case was found in September 2012, when a 49-year-old man living in Qatar presented with similar flu symptoms. A sequence of the virus was nearly identical to that of the first case. In November 2012, similar cases appeared in Qatar and Saudi Arabia. Additional cases were noted, with deaths associated, and rapid research and monitoring of the novel coronavirus began. It is not known whether the infections are the result of a single zoonotic event with subsequent human-to-human transmission, or if the multiple geographic sites of infection represent multiple zoonotic events from an unknown common source.
            - A study by Ziad Memish of Riyadh University and colleagues suggests that the virus arose some time between July 2007 and June 2012, with perhaps as many as seven separate zoonotic transmissions. Among animal reservoirs, CoV has a large genetic diversity yet the samples from patients suggested a similar genome, and therefore common source, though the data were limited. It was determined through molecular clock analysis that viruses from the EMC/2012 and England/Qatar/2012 date to early 2011, suggesting that these cases were descended from a single zoonotic event. It appeared the MERS-CoV had been circulating in the human population for more than a year without detection, and suggested independent transmission from an unknown source.',

            'spread' => '- MERS-CoV, like other coronaviruses, likely spreads from an infected person’s respiratory secretions, such as through coughing. However, we don’t fully understand the precise ways that it spreads.
            - MERS-CoV has spread from ill people to others through close contact, such as caring for or living with an infected person. Infected people have spread MERS-CoV to others in healthcare settings, such as hospitals. Researchers studying MERS have not seen any ongoing spreading of MERS-CoV in the community.
            - All reported cases have been linked to countries in and near the Arabian Peninsula. Most infected people either lived in the Arabian Peninsula or recently traveled from the Arabian Peninsula before they became ill. A few people have gotten MERS after having close contact with an infected person who had recently traveled from the Arabian Peninsula. The largest known outbreak of MERS outside the Arabian Peninsula occurred in the Republic of Korea in 2015 and was associated with a traveler returning from the Arabian Peninsula.',

            'number_of_infections' => 2494,
            'number_of_death' => 858,

            'precaution_required' => '- No vaccine or specific treatment is currently available, however several MERS-CoV specific vaccines and treatments are in development. Treatment is supportive and based on the patient’s clinical condition.
            - As a general precaution, anyone visiting farms, markets, barns, or other places where dromedary camels and other animals are present should practice general hygiene measures, including regular hand washing before and after touching animals, and should avoid contact with sick animals.
            - The consumption of raw or undercooked animal products, including milk and meat, carries a high risk of infection from a variety of organisms that might cause disease in humans. Animal products that are processed appropriately through cooking or pasteurization are safe for consumption, but should also be handled with care to avoid cross contamination with uncooked foods. Camel meat and camel milk are nutritious products that can continue to be consumed after pasteurization, cooking, or other heat treatments.
            - Until more is understood about MERS-CoV, people with diabetes, renal failure, chronic lung disease, and immunocompromised persons are considered to be at high risk of severe disease from MERS-CoV infection. These people should avoid contact with camels, drinking raw camel milk or camel urine, or eating meat that has not been properly cooked.'
        ]);

        VirusArticleModel::create([
            'name' => 'Monkeypox Virus',
            'year_originated' => 1958,
            'type_id' => 5,
            'img' => 'Monkeypox Virus/monkeypox-virions-l.jpg',
            'img_detail' => 'Monkeypox Virus/monkeypox-infographic.jfif',
            'img_precaution' => 'Monkeypox Virus/DLyUnriXkAAAIs9.jpg',
            'description' => 'Monkeypox is an infectious disease caused by the monkeypox virus that can occur in a number of animals including humans. Symptoms begin with fever, headache, muscle aches, swollen glands, and feeling tired. Symptoms are followed by a rash that forms blisters and crusts.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Africa',

            'detail_description' => '- Monkeypox is a rare disease that is caused by infection with monkeypox virus. Monkeypox virus belongs to the Orthopoxvirus genus in the family Poxviridae. The Orthopoxvirus genus also includes variola virus (which causes smallpox), vaccinia virus (used in the smallpox vaccine), and cowpox virus.
            - Monkeypox was first discovered in 1958 when two outbreaks of a pox-like disease occurred in colonies of monkeys kept for research, hence the name ‘monkeypox.’ The first human case of monkeypox was recorded in 1970 in the Democratic Republic of the Congo (DRC) during a period of intensified effort to eliminate smallpox. Since then, monkeypox has been reported in people in several other central and western African countries: Cameroon, Central African Republic, Cote d’Ivoire, Democratic Republic of the Congo, Gabon, Liberia, Nigeria, Republic of the Congo, and Sierra Leone. The majority of infections are in Democratic Republic of the Congo.
            - Monkeypox cases in people have occurred outside of Africa linked to international travel or imported animals, including cases in the United States, as well as Israel, Singapore, and the United Kingdom.
            - The natural reservoir of monkeypox remains unknown. However, African rodents and non-human primates (like monkeys) may harbor the virus and infect people.',

            'spread' => '- Direct person-to-person: Direct transmission of the virus requires fairly long face-to-face contact. The virus can be transmitted through the air by droplets released when an infected person coughs, sneezes, or talks.
            - Indirectly from an infected person: In rare cases, airborne viruses can spread further, perhaps through the ventilation system in a building, infecting people in other rooms or on other floors.
            - Through contaminated items: Smallpox can also be spread through contact with contaminated clothing and bedding, although the risk of infection from these sources is less common.',

            'number_of_infections' => 10000,
            'number_of_death' => 142,

            'precaution_required' => '- There are number of measures that can be taken to prevent infection with monkeypox virus:
            + Avoid contact with animals that could harbor the virus (including animals that are sick or that have been found dead in areas where monkeypox occurs).
            + Avoid contact with any materials, such as bedding, that has been in contact with a sick animal.
            + Isolate infected patients from others who could be at risk for infection.
            + Practice good hand hygiene after contact with infected animals or humans. For example, washing your hands with soap and water or using an alcohol-based hand sanitizer.
            + Use personal protective equipment (PPE) when caring for patients.'
        ]);

        VirusArticleModel::create([
            'name' => 'Smallpox Virus',
            'year_originated' => 1980,
            'type_id' => 5,
            'img' => 'Smallpox Virus/cc_scisource_e00099_16x9.jpg',
            'img_detail' => 'Smallpox Virus/smallpox.png',
            'img_precaution' => 'Smallpox Virus/rubber-smallpox-virus-round-watermark-drawing_csp84840098.jpg',
            'description' => 'Smallpox was an infectious disease caused by one of two virus variants, Variola major and Variola minor. The agent of variola virus (VARV) belongs to the genus Orthopoxvirus. The last naturally occurring case was diagnosed in October 1977, and the World Health Organization (WHO) certified the global eradication of the disease in 1980. The risk of death after contracting the disease was about 30%, with higher rates among babies. Often those who survived had extensive scarring of their skin, and some were left blind.'
        ]);

        VirusDetailModel::create([
            'location_of_origin' => 'Egyptian',

            'detail_description' => '- The origin of smallpox is unknown. The finding of smallpox-like rashes on Egyptian mummies suggests that smallpox has existed for at least 3,000 years. The earliest written description of a disease like smallpox appeared in China in the 4th century CE (Common Era). Early written descriptions also appeared in India in the 7th century and in Asia Minor in the 10th century.
            - Before smallpox was eradicated, it was a serious infectious disease caused by the variola virus. It was contagious—meaning, it spread from one person to another. People who had smallpox had a fever and a distinctive, progressive skin rash.
            - Most people with smallpox recovered, but about 3 out of every 10 people with the disease died. Many smallpox survivors have permanent scars over large areas of their body, especially their faces. Some are left blind.',

            'spread' => '- The disease is spread through inhalation of airborne variola viruses, usually from secretions from the throat, nose, and throat mucosa of an infected person. The disease is transmitted from person to person primarily through prolonged face-to-face contact with an infected person, but can also be transmitted through direct contact with infected body fluids or contaminated objects.
            - Smallpox is rarely airborne in confined spaces. The virus can be transmitted by the placenta, but congenital smallpox has a relatively low incidence. Smallpox has not been reported to be transmissible during the prodromal period, and the virus usually spreads from the onset of the rash, or is accompanied by lesions of the mouth and throat. The virus can be transmitted during the course of the illness, most often around the first week of rash appearance, when the skin lesions are intact.',

            'number_of_infections' => 1000000000,
            'number_of_death' => 300000000,

            'precaution_required' => '- There are vaccines to protect people from smallpox. Currently, smallpox vaccines are not recommended for the general public because smallpox has been eradicated. If there were a smallpox outbreak, health officials would use smallpox vaccines to control it. While some antiviral drugs may help treat smallpox disease, there is no treatment for smallpox that has been tested in people who are sick with the disease and proven effective.
            - Smallpox can be prevented by smallpox vaccines, also called vaccinia virus vaccines. The vaccines are made from a virus called vaccinia, which is a poxvirus similar to smallpox, but less harmful. There are two licensed smallpox vaccines in the United States and one investigational vaccine that may be used in a smallpox emergency.
            - The replication-competent smallpox vaccines (ACAM2000 and APSV) can protect people from getting sick or make the disease less severe if they receive the vaccine either before or within a week of coming in contact with smallpox virus. If you get the vaccine:
            + Before contact with the virus, the vaccine can protect you from getting sick.
            + Within 3 days of being exposed to the virus, the vaccine might protect you from getting the disease. If you still get the disease, you might get much less sick than an unvaccinated person would.
            + Within 4 to 7 days of being exposed to the virus, the vaccine likely gives you some protection from the disease. If you still get the disease, you might not get as sick as an unvaccinated person would.
            - Once you have developed the smallpox rash, the vaccine will not protect you.
            - Currently, smallpox vaccines are not available to the general public because smallpox has been eradicated, and the virus no longer exists in nature. However, there is enough smallpox vaccine to vaccinate every person in Viet Nam if a smallpox outbreak were to occur.'
        ]);

    }
}
