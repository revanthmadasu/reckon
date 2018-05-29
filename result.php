<?php
echo $_POST['symptoms'];
$user_symptoms=explode(',',$_POST['symptoms']);
$influenza=array("uncoordination","fever","pleuritic pain","snuffle","throat sore","malaise","debilitation","symptom aggravating factors","chill","scleral icterus","nasal flaring","dysuria","lip smacking","headache","sneeze","snore","green sputum","shortness of breath","distress respiratory","blackout","extreme exhaustion");
$gastritis=array("heme positive","pain abdominal","vomiting","disequilibrium","nausea","intoxication","haemorrhage","guaiac positive","pain","decreased body weight","sore to touch","dizziness");
$hypercholesterolemia=array("pain","pain chest","sweat","sweating increased","nonsmoker","pressure chest","syncope","numbness","chest discomfort","shortness of breath","st segment depression","worry","t wave inverted","bradycardia","dyspnea");
$epilepsy=array("seizure","hypometabolism","aura","muscle twitch","drowsiness","tremor","unresponsiveness","hemiplegia","myoclonus","gurgle","sleepy","lethargy","wheelchair bound");
$insufficiency_renal=array("shortness of breath","hyperkalemia","orthopnea","rale","urgency of micturition","ascites","guaiac positive","asthenia","apyrexial","mental status changes","dyspnea","difficulty","diarrhea","hypotension","breath sounds decreased","swelling","hypokinesia");
$dehydration=array("fever","diarrhea","vomiting","hypotension","nausea","lightheadedness","unwell","mental status changes","anorexia","asthenia","sensory discomfort","syncope","lethargy","dizziness","syncope","blackout","history of - blackout");
$hypothyroidism=array("shortness of breath","prostatism","drowsiness","sleepy","hyponatremia","fall","unsteady gait","polyuria","hypotension","difficulty","syncope","nightmare","speech slurred","weight gain","asthenia","fatigue","tired","agitation","mental status changes","motor retardation","vomiting","numbness","mass of body structure");
$hernia_hiatal=array("pain abdominal","fatigability","prodrome","vomiting","nausea","myalgia","hyponatremia","sore to touch","general discomfort","dyspnea on exertion","asterixis","guaiac positive","numbness of hand","headache","photophobia");
$fibroid_tumor=array("para 2","haemorrhage","abortion","intermenstrual heavy bleeding","muscle hypotonia","hypotonic","previous pregnancies 2","shortness of breath","fever","heartburn","primigravida","abnormally hard consistency","proteinemia");
$deglutition_disorder=array("paresthesia","titubation","dysarthria","painful swallowing","hoarseness","stridor","spasm","asthenia","dysdiadochokinesia","ataxia","achalasia","decreased body weight","stiffness","lesion","side pain");
$osteoporosis=array("prostatism","fall","hirsutism","sniffle","distended abdomen","vertigo","numbness of hand","bradykinesia","pain","syncope","out of breath","apyrexial","urge incontinence","lightheadedness");
$chronic_alcoholic_intoxication=array("tremor","hallucinations auditory","suicidal","hoard","irritable mood","feeling hopeless","feeling suicidal","neologism","seizure","homelessness","sleeplessness","unconscious state","panic","breath sounds decreased","shortness of breath");
$asthma=array("wheezing","cough","shortness of breath","chest tightness","non-productive cough","pleuritic pain","productive cough","symptom aggravating factors","distress respiratory");
$sepsis_invertebrate=array("fever","distress respiratory","hypotension","tachypnea","chill","lethargy","bradycardia","breech presentation","cyanosis","spontaneous rupture of membranes","haemorrhage","unresponsiveness","rale","apyrexial");
$paranoia=array("hallucinations auditory","hallucinations visual","agitation","irritable mood","verbal auditory hallucinations","feeling suicidal","suicidal","terrify","neologism","homelessness","energy increased","mood depressed","decompensation","cicatrisation","scar tissue","blackout","loose associations");
$ileus=array("abscess bacterial","abdomen acute","air fluid level","catching breath","abdominal tenderness","nausea","sore to touch","flatulence","diarrhea","mass of body structure","apyrexial","constipation","thicken","gravida 0","pain abdominal");
$neoplasm=array("mass of body structure","lesion","pain chest","hematuria","tumor cell invasion","pain","anosmia","thicken","metastatic lesion","food intolerance","decreased body weight","night sweat","hemianopsia homonymous","satiety early","pain abdominal","headache");
$obesity_morbid=array("out of breath","sedentary","angina pectoris","cough","unhappy","labored breathing","hypothermia","natural","dyspnea","hematocrit decreased","wheezing","hypoxemia","renal angle tenderness","feels hot/feverish");
$primary_malignant_neoplasm=array("pain","mass of body structure","lesion","cushingoid facies","cushingoid habitus","emphysematous change","decreased body weight","ascites","hoarseness","thicken","hematuria");
$failure_heart=array("orthopnea","fatigue","dyspnea on exertion","dyspnea","shortness of breath","pansystolic murmur","jugular venous distention","systolic ejection murmur","hypotension","angina pectoris","hypokinesia");
$malignant_neoplasm_of_breast=array("mass in breast","mass of body structure","paresthesia","retropulsion","erythema","difficulty","lesion","estrogen use","burning sensation","dyspnea","swelling","formication");
$tonic_clonic_epilepsy=array("drowsiness","lip smacking","myoclonus","tremor","phonophobia","rolling of eyes","sleepy","hirsutism","moody","muscle twitch","unresponsiveness","headache","ambidexterity","absences finding","spasm","decreased body weight","tumor cell invasion");
$transient_ischemic_attack=array("speech slurred","dysarthria","facial paresis","asthenia","neck stiffness","vertigo","numbness","lightheadedness","extrapyramidal sign","Stahli's line","vision blurred","headache","room spinning","syncope","difficulty","rambling speech","clumsiness");
$malignant_neoplasm_of_prostate=array("hematuria","dysesthesia","asthenia","polymyalgia","passed stones","pleuritic pain","guaiac positive","rale","breath sounds decreased","urge incontinence","dysuria","diarrhea","vertigo","qt interval prolonged","ataxia","paresis","hemianopsia homonymous","tumor cell invasion","hemodynamically stable","mass of body structure","rhonchus","orthostasis","decreased body weight");
$embolism_pulmonary=array("shortness of breath","hypoxemia","tachypnea","hematocrit decreased","pain chest","dyspnea","pleuritic pain","neck stiffness","yellow sputum","productive cough","cicatrisation","unresponsiveness","distress respiratory","wheezing","apyrexial","non-productive cough");
$tricuspid_valve_insufficiency=array("shortness of breath","pain","vomiting","nausea","bradycardia","pain abdominal","fever","cicatrisation","mediastinal shift","impaired cognition");
$respiratory_failure=array("hemiplegia","nausea","unresponsiveness","productive cough","dyspnea","tachypnea","hyperkalemia","hypokinesia","sinus rhythm","general unsteadiness","bruit","consciousness clear","shortness of breath","lesion","redness");
$degenerative_polyarthritis=array("pain","food intolerance","numbness of hand","general discomfort","drowsiness","asthenia","nonsmoker","non-productive cough","polydypsia","stiffness","unsteady gait");
$aphasia=array("clonus","egophony","facial paresis","aphagia","muscle twitch","paralyse","low back pain","charleyhorse");
$neoplasm_metastasis=array("thicken","tumor cell invasion","metastatic lesion","pain neck","lung nodule","pain","pain abdominal","food intolerance","mass of body structure","atypia");
$malignant_tumor_of_colon=array("lesion","prostatism","constipation","general discomfort","diarrhea","pain abdominal","urinary hesitation","dizzy spells","shooting pain","bradycardia","vomiting","systolic ejection murmur","nausea","hyperemesis","polydypsia");
$lymphoma=array("lesion","fever","welt","transaminitis","decreased body weight","ataxia","tinnitus","hydropneumothorax","superimposition","haemoptysis","fatigue","tired","polydypsia","difficulty passing urine");
$anemia=array("chill","guaiac positive","monoclonal","ecchymosis","tumor cell invasion","haemorrhage","pallor","asthenia","fatigue","heme positive","pain back","orthostasis","hyponatremia","dizziness","shortness of breath","pain","rhonchus","arthralgia","swelling","transaminitis");
$chronic_obstructive_airway_disease=array("shortness of breath","wheezing","cough","dyspnea","distress respiratory","sputum purulent","hypoxemia","hypercapnia","patient non compliance","chest tightness");
$sickle_cell_anemia=array("breakthrough pain","pain back","pain","shortness of breath","snuffle","pain chest","pain abdominal","hepatosplenomegaly","green sputum","apyrexial","headache");
$coronary_arteriosclerosis=array("pain chest","angina pectoris","shortness of breath","hypokinesia","sweat","sweating increased","pressure chest","dyspnea on exertion","orthopnea","chest tightness");
$cholecystitis=array("moan","nausea","pain abdominal","Murphy's sign","flatulence","colic abdominal","pain","ascites","diarrhea","qt interval prolonged","cardiovascular finding","cardiovascular event","groggy","sinus rhythm","gasping for breath","constipation","feces in rectum","abnormally hard consistency");
$psychotic_disorder=array("suicidal","hallucinations auditory","feeling suicidal","hallucinations visual","motor retardation","blackout","verbal auditory hallucinations","feeling hopeless","irritable mood","agitation","tremor","catatonia","weepiness","homelessness","sleeplessness","withdraw","energy increased","intoxication","worry","behavior hyperactive","patient non compliance","mood depressed","terrify","nightmare","consciousness clear");
$thrombus=array("hypokinesia","anorexia","hypertonicity","shortness of breath","hypoalbuminemia","pruritus","sore to touch","hemodynamically stable","facial paresis","vomiting","stool color yellow");
$chronic_kidney_failure=array("vomiting","orthopnea","hyperkalemia","oliguria","jugular venous distention","nausea","shortness of breath","mental status changes","diarrhea","asthenia","chest tightness","malaise","chill","rale","fever","pleuritic pain","apyrexial","guaiac positive","swelling","catatonia","unresponsiveness","yellow sputum");
$depressive_disorder=array("feeling suicidal","suicidal","hallucinations auditory","feeling hopeless","weepiness","sleeplessness","motor retardation","irritable mood","blackout","mood depressed","hallucinations visual","worry","agitation","tremor","intoxication","verbal auditory hallucinations","energy increased","difficulty","nightmare","unable to concentrate","homelessness");
$myocardial_infarction=array("pain chest","st segment elevation","sweat","sweating increased","shortness of breath","st segment depression","hypokinesia","angina pectoris","pressure chest","t wave inverted","orthopnea","rale","chest tightness","presence of q wave","palpitation","dyspnea","chest discomfort","bradycardia","syncope");
$obesity=array("pain","catatonia","snore","pain chest","r wave feature","has religious belief","shortness of breath","fatigue","tired","overweight","systolic murmur","mood depressed","ecchymosis");
$infection_urinary_tract=array("fever","dysuria","hematuria","renal angle tenderness","lethargy","asthenia","hyponatremia","hemodynamically stable","distress respiratory","difficulty passing urine","mental status changes","consciousness clear");
$tachycardia_sinus=array("left atrial hypertrophy","sweat","sweating increased","alcohol binge episode","pressure chest","scar tissue","cardiovascular finding","cardiovascular event","orthostasis","shortness of breath","t wave inverted","vomiting","pain abdominal");
$gout=array("hot flush","pain","redness","swelling","erythema","emphysematous change","sore to touch","hypokinesia","ascites","patient non compliance");
$hyperglycemia=array("sore to touch","pruritus","feeling strange","pustule","cushingoid facies","cushingoid habitus","decreased body weight","mood depressed","estrogen use","wheezing","ascites","seizure");
$diverticulosis=array("fecaluria","constipation","abscess bacterial","heme positive","lightheadedness","diarrhea","haemorrhage","pain","projectile vomiting","pneumatouria","cystic lesion","anorexia","nausea","feeling suicidal","feeling hopeless");
$failure_kidney=array("orthopnea","oliguria","slowing of urinary stream","extreme exhaustion","unresponsiveness","hypotension","enuresis","shortness of breath","haemorrhage","prostatism","no status change","bedridden","bedridden","fatigue");
$schizophrenia=array("hallucinations auditory","hypersomnolence","irritable mood","verbal auditory hallucinations","patient non compliance","agitation","suicidal","worry","hallucinations visual","underweight","underweight","homelessness");
$decubitus_ulcer=array("systolic murmur","frail","fever");
$encephalopathy=array("uncoordination","asterixis","haemorrhage","drowsiness","sleepy","absences finding","posturing","aura","tonic seizures","debilitation","consciousness clear","unresponsiveness","thicken","hypokinesia");
$affect_labile=array("extreme exhaustion","sleeplessness","enuresis","patient non compliance","feeling hopeless","hallucinations visual","bedridden","bedridden","prostatism");
$carcinoma_prostate=array("hematuria","dysesthesia","asthenia","polymyalgia","passed stones","pleuritic pain","guaiac positive","rale","breath sounds decreased","urge incontinence","dysuria","diarrhea","vertigo","qt interval prolonged","ataxia","paresis","hemianopsia homonymous","tumor cell invasion","hemodynamically stable","mass of body structure","rhonchus","orthostasis","decreased body weight");
$Alzheimers_disease=array("drool","agitation","nightmare","rhonchus","consciousness clear","pin-point pupils","bedridden","bedridden","frail","tremor resting","hyperkalemia","facial paresis","groggy","muscletwitch","wheelchair bound","tremor","cough","fever");
$incontinence=array("paraparesis","seizure","asthenia","urge incontinence","unconscious state","aura","moody","fear of falling","tremor","spasm","unhappy","syncope","fall","stiffness","unresponsiveness");
$hyperbilirubinemia=array("cyanosis","tachypnea","para 1","bradycardia","breech presentation","cushingoid facies","cushingoid habitus","cough","myalgia");
$paroxysmal_dyspnea=array("orthopnea","shortness of breath","dyspnea on exertion","jugular venous distention","rale","pain chest","palpitation","sweat","sweating increased","weight gain","cough","dyspnea");
$bipolar_disorder=array("feeling suicidal","energy increased","suicidal","irritable mood","agitation","has religious belief","disturbed family","hallucinations auditory","verbal auditory hallucinations","weepiness","behavior hyperactive","catatonia","feeling hopeless","worry","sleeplessness","hypersomnia","difficulty","hallucinations visual","hyperhidrosis disorder","mydriasis","extrapyramidal sign","loose associations","intoxication","motor retardation","homelessness","blackout","tremor","exhaustionhepatitis","ascites","spontaneous rupture of membranes","tachypnea","pain abdominal","pruritus","anorexia","transaminitis","projectile vomiting","chill","distress respiratory","fever","vomiting");
$pericardial_effusion_body_substance=array("pericardial friction rub","dyspnea","shortness of breath","hemodynamically stable","cardiomegaly","hypotension","sputum purulent","facial paresis","pain","oliguria","blackout","intoxication");
$adhesion=array("flatulence","pain","large-for-dates fetus","para 1","vomiting","lung nodule","breech presentation","shortness of breath","decreased body weight","immobile","unsteady gait","hallucinations visual","feeling suicidal");
$biliary_calculus=array("vomiting","nausea","pain abdominal","pain","cushingoid facies","cushingoid habitus","ascites","thicken","sore to touch","diarrhea","apyrexial","palpitation");
$endocarditis=array("pleuritic pain","thicken","myalgia","apyrexial","night sweat","flare","shortness of breath","orthopnea","abscess bacterial","hypotension","cough","metastatic lesion","breath sounds decreased","decreased body weight","pulsus paradoxus","hypokinesia");
$acquired_immuno_deficiency_syndrome=array("fever","night sweat","spontaneous rupture of membranes","cough","decreased body weight","chill","diarrhea","pleuritic pain","patient non compliance","tachypnea","productive cough","muscle hypotonia","hypotonic","feeling suicidal");
$pneumothorax=array("dyspnea","cardiovascular finding","cardiovascular event","haemoptysis","cough","hypercapnia","soft tissue swelling","prostatism","agitation");
$accident_cerebrovascular=array("dysarthria","asthenia","speech slurred","facial paresis","hemiplegia","unresponsiveness","seizure","numbness");
$confusion=array("seizure","enuresis","lethargy","speech slurred","fall","consciousness clear","mental status changes","asterixis","unconscious state","agitation","muscle twitch","asthenia","sleepy","dizziness","headache","dysarthria","lightheadedness","tremor","hyponatremia","unresponsiveness");
$candidiasis=array("diarrhea","throat sore","decreased body weight","chill","headache","abdominal tenderness","patient non compliance","photophobia","night sweat","painful swallowing","poor dentition","transaminitis","non-productive cough","adverse reaction","adverse effect","abdominal bloating");
$anxiety_state=array("worry","feeling suicidal","suicidal","sleeplessness","feeling hopeless","irritable mood","tremor","blackout","weepiness","has religious belief","nervousness","hallucinations visual","formication","difficulty","pain chest","patient non compliance","agitation","palpitation","hallucinations auditory","mood depressed","hot flush","pain","consciousness clear","nightmare");
$cirrhosis=array("ascites","fall","splenomegaly","pruritus","pain abdominal","tumor cell invasion","distended abdomen","lesion","hemodynamically stable","guaiac positive","sore to touch","bleeding of vagina");
$pancytopenia=array("hypoproteinemia","fatigue","haemorrhage","fatigability","cushingoid facies","cushingoid habitus","stool color yellow","colic abdominal");
$oral_candidiasis=array("diarrhea","throat sore","decreased body weight","chill","headache","abdominal tenderness","patient non compliance","photophobia","night sweat","painful swallowing","poor dentition","transaminitis","non-productive cough","adverse reaction","adverse effect","abdominal bloating");
$diverticulitis=array("pain abdominal","abscess bacterial","dullness","red blotches","diarrhea","sore to touch","dysuria","pain","vomiting","sinus rhythm","colic abdominal","apyrexial","abdominal tenderness","fever","unsteady gait","thicken","urgency of micturition","anorexia","monoclonal","constipation");
$spasm_bronchial=array("shortness of breath","scar tissue","apyrexial","no known drug allergies","pain","productive cough","throat sore","dyspnea","chest tightness","hypoxemia","tachypnea","sensory discomfort","fever","vomiting","rhonchus","hemiplegia","fremitus");
$ulcer_peptic=array("pain abdominal","paraparesis","nausea","vomiting","polymyalgia","out of breath","pain chest","hemiplegia","gurgle","hunger","apyrexial","nervousness");
$depression_mental=array("feeling suicidal","suicidal","hallucinations auditory","feeling hopeless","weepiness","sleeplessness","motor retardation","irritable mood","blackout","mood depressed","hallucinations visual","worry","agitation","tremor","intoxication","verbal auditory hallucinations","energy increased","difficulty","nightmare","unable to concentrate","homelessness");
$emphysema_pulmonary=array("behavior showing increased motor activity","scar tissue","dyspnea on exertion","coordination abnormal","myalgia","hypercapnia","clammy skin","has religious belief","room spinning","moan","night sweat","cachexia","symptom aggravating factors","dyspnea","rale","flushing","painful swallowing","arthralgia","choke","tenesmus","constipation");
$hypoglycemia=array("unresponsiveness","hypothermia"," natural","incoherent","qt interval prolonged","lameness","claudication","unconscious state","clammy skin","polyuria","distress respiratory","hypotension");
$dependence=array("intoxication","tremor","agitation","suicidal","homelessness","prostatism","lethargy","seizure","muscle twitch","stuffy nose","feeling hopeless","heavy legs","rale");
$osteomyelitis=array("pain","redness","prostate tender","fever","difficulty passing urine","sore to touch","swelling","apyrexial","erythema","abscess bacterial","pain foot","urinary hesitation");
$hemorrhoids=array("haemorrhage","bowel sounds decreased","decreased stool caliber","nausea and vomiting","hunger","diarrhea","dizziness","hyponatremia","clonus","pain","achalasia","burning sensation","guaiac positive","numbness of hand","wheezing","cough");
$primary_carcinoma_of_the_liver_cells=array("mass of body structure","splenomegaly","lesion","paresis","tumor cell invasion","room spinning","haemorrhage","thicken","indifferent mood","cachexia","hypothermia"," natural","pain abdominal","hepatomegaly","hematocrit decreased","stupor","decreased body weight","shortness of breath","cough");
$pyelonephritis=array("fever","pain","urgency of micturition","hematuria","vomiting","chill","diarrhea","nausea","pain abdominal","myalgia","fever","chill");
$pancreatitis=array("vomiting","pain abdominal","nausea","pain","diarrhea","stool color yellow","rigor - temperature-associated observation","apyrexial","sore to touch");
$cholelithiasis=array("vomiting","nausea","pain abdominal","pain","cushingoid facies","cushingoid habitus","ascites","thicken","sore to touch","diarrhea","apyrexial","palpitation");
$cardiomyopathy=array("shortness of breath","orthopnea","hypokinesia","jugular venous distention","palpitation","pain chest","syncope","yellow sputum","rale","dyspnea","dyspnea on exertion","left atrial hypertrophy","fatigue","weight gain","patient non compliance");
$Pneumocystis_carinii_pneumonia=array("yellow sputum","cachexia","chill","decreased body weight","productive cough","myalgia","diarrhea","neck stiffness","hacking cough","dyspareunia","hypokalemia","dyspnea on exertion","poor dentition","transaminitis","non-productive cough","headache","floppy","spontaneous rupture of membranes");
$carcinoma_colon=array("lesion","prostatism","constipation","general discomfort","diarrhea","pain abdominal","urinary hesitation","dizzy spells","shooting pain","bradycardia","vomiting","systolic ejection murmur","nausea","hyperemesis","polydypsia");
$edema_pulmonary=array("urgency of micturition","shortness of breath","rale","tachypnea","orthopnea","Heberden's node","jugular venous distention","dyspnea","sweat","sweating increased","patient non compliance","chest discomfort","hyperkalemia","sinus rhythm","pain chest","hypotension","wheezing");
$carcinoma_breast=array("mass in breast","mass of body structure","paresthesia","retropulsion","erythema","difficulty","lesion","estrogen use","burning sensation","dyspnea","swelling","formication");
$hemiparesis=array("dysarthria","paresis","asthenia","aphagia","seizure","speech slurred","focal seizures","hemiplegia","abnormal sensation","unresponsiveness","stupor","drowsiness","sleepy","fremitus","Stahli's line","stinging sensation","paralyse","clonus","facial paresis");
$mitral_valve_insufficiency=array("shortness of breath","dyspnea on exertion","asymptomatic","hypokinesia","dyspnea","syncope","thicken","left atrial hypertrophy","palpitation","fatigue","vomiting","pain","cardiomegaly","chest discomfort");
$peripheral_vascular_disease=array("shortness of breath","rest pain","angina pectoris","unresponsiveness","hyperkalemia","sinus rhythm","labored breathing","dyspnea","sore to touch","anorexia","sleepy");
$tonic_clonic_seizures=array("drowsiness","lip smacking","myoclonus","tremor","phonophobia","rolling of eyes","sleepy","hirsutism","moody","muscle twitch","unresponsiveness","headache","ambidexterity","absences finding","spasm","decreased body weight","tumor cell invasion");
$effusion_pericardial=array("pericardial friction rub","dyspnea","shortness of breath","hemodynamically stable","cardiomegaly","hypotension","sputum purulent","facial paresis","pain","oliguria","blackout","intoxication");
$thrombocytopaenia=array("ecchymosis","monocytosis","posterior rhinorrhea","haemorrhage","tachypnea","fever","pruritus","hypotension","fatigue");
$adenocarcinoma=array("mass of body structure","lesion","decreased body weight","constipation","fremitus","decreased stool caliber","satiety early","hematochezia","egophony","pain","cicatrisation","scar tissue","pain abdominal");
$failure_heart_congestive=array("shortness of breath","orthopnea","jugular venous distention","rale","dyspnea","cough","wheezing");
$exanthema=array("fever","pruritus","macule","lesion","redness","headache","apyrexial","arthralgia","swelling","erythema","photophobia","chill","scratch marks","pain","painful swallowing");
$ischemia=array("drowsiness","sleepy","pain chest","angina pectoris","pressure chest","chest discomfort","shortness of breath","dyspnea","sinus rhythm","bradycardia","sweat","sweating increased","rale","asymptomatic","anorexia");
$hypertension_pulmonary=array("shortness of breath","Stahli's line","heavy legs","breath sounds decreased","neck stiffness","dyspnea on exertion","cyanosis","hypotension","left atrial hypertrophy");
$infection=array("fever","erythema","decreased translucency","hepatosplenomegaly","chill","pruritus","diarrhea","abscess bacterial","swelling","pain","apyrexial","cough");
$cellulitis=array("erythema","pain","swelling","redness","fever","abscess bacterial","patient non compliance","hypesthesia","hyperacusis","pruritus","pain chest","scratch marks","chill","sore to touch");
$lymphatic_diseases=array("pain","mass of body structure","night sweat","splenomegaly","lesion","chill","decreased body weight","swelling","fever","hyperacusis","fremitus","non-productive cough","egophony","redness","hepatomegaly","fatigue");
$gastroenteritis=array("pain abdominal","breath-holding spell","nausea","decreased body weight","sore to touch","scleral icterus","fever","myalgia","hyponatremia","retch","mass of body structure","decreased body weight");
$parkinson_disease=array("achalasia","fall","stiffness","withdraw","agitation","hemiplegia","difficulty","unresponsiveness","syncope","facial paresis","orthostasis","worry","drowsiness","sleepy","hematuria","tremor","night sweat","mass of body structure");
$hernia=array("pain abdominal","pain","hyperventilation","excruciating pain","gag","nausea","posturing","hemiplegia","sore to touch","haemorrhage","apyrexial","food intolerance","pulse absent","asthenia","mass of body structure","thicken");
$colitis=array("fever","thicken","green sputum","vomiting","nausea and vomiting","awakening early","pain","nausea","chill","tenesmus","urge incontinence","pain abdominal","hemodynamically stable");
$deep_vein_thrombosis=array("swelling","pain","ecchymosis","shortness of breath","pain in lower limb","cardiomegaly","rale","erythema","hypotension","clonus","non-productive cough","redness");
$personality_disorder=array("nightmare","feeling hopeless","transsexual","hallucinations auditory","irritable mood","sleeplessness","agitation","weepiness","mood depressed","scratch marks","nausea and vomiting","extreme exhaustion","side pain","worry","enuresis","homelessness","nervousness","ascites","pruritus");
$hyperlipidemia=array("pain chest","angina pectoris","palpitation","presence of q wave","photopsia","sweat","sweating increased","chest discomfort","shortness of breath","giddy mood","hypokinesia","hemiplegia","dizziness");
$pneumonia=array("cough","fever","decreased translucency","shortness of breath","rale","productive cough","pleuritic pain","yellow sputum","breath sounds decreased","chill","rhonchus","green sputum","non-productive cough","wheezing","haemoptysis","distress respiratory","tachypnea","malaise","night sweat");
$gastroesophageal_reflux_disease=array("pain","pain chest","burning sensation","hyponatremia","satiety early","throbbing sensation quality","chest tightness","sensory discomfort","presence of q wave","nausea","general discomfort","constipation","palpitation","pain abdominal","heartburn","sweat","sweating increased","asthenia");
$pneumonia_aspiration=array("mediastinal shift","fever","clonus","mental status changes","decreased translucency","unresponsiveness","extreme exhaustion","stupor","seizure","transaminitis","hemiplegia","cough","gurgle","pain","diarrhea","pain abdominal");
$stenosis_aortic_valve=array("dyspnea on exertion","syncope","chest discomfort","systolic murmur","sciatica","angina pectoris","pain chest","frothy sputum","bradycardia","shortness of breath","pain");
$hypertensive_disease=array("pain chest","shortness of breath","dizziness","asthenia","fall","syncope","vertigo","sweat","sweating increased","palpitation","nausea","angina pectoris","pressure chest");
$glaucoma=array("fall","distended abdomen","unsteady gait","paresthesia","hyponatremia","agitation","unconscious state","burning sensation","lesion","mass of body structure");
$septicemia=array("fever","distress respiratory","hypotension","tachypnea","chill","lethargy","bradycardia","breech presentation","cyanosis","spontaneous rupture of membranes","haemorrhage","unresponsiveness","rale","apyrexial");
$bronchitis=array("cough","wheezing","shortness of breath","chest tightness","fever","throat sore","productive cough","hepatosplenomegaly","night sweat","haemoptysis","labored breathing","snuffle","hacking cough","dyspnea","chill","stridor","decreased body weight");
$delusion=array("loose associations","giddy mood","feeling hopeless","agitation","hallucinations auditory","irritable mood","sleeplessness","neologism","homicidal thoughts","disturbed family","worry","decompensation","verbally abusive behavior","catatonia","suicidal","terrify","blackout","weepiness","impaired cognition","irritable mood","agitation");
$upper_respiratory_infection=array("cough","throat sore","wheezing","shortness of breath","labored breathing","fever","stuffy nose","non-productive cough","snuffle","indifferent mood","egophony","barking cough","polymyalgia","pleuritic pain","night sweat","dyspnea","productive cough","decreased translucency","rhonchus","rapid shallow breathing","apyrexial","noisy respiration","nasal discharge present","emphysematous change","frail","cystic lesion","symptom aggravating factors","hemodynamically stable dementia","fever","fall","unresponsiveness","lethargy","agitation","ecchymosis","syncope","rale","unconscious state","cough","bedridden","bedridden","pain","facial paresis","abdominal tenderness","rhonchus","unsteady gait","hallucinations auditory");
$ketoacidosis_diabetic=array("polyuria","vomiting","nausea","pain abdominal","milky","feeling strange","gurgle","nervousness","abdominal tenderness","regurgitates after swallowing","vision blurred","urinary hesitation","diarrhea","seizure","aura");
$manic_disorder=array("energy increased","suicidal","hypersomnia","feeling suicidal","blanch","hallucinations auditory","hallucinations visual","elation","verbal auditory hallucinations","feeling hopeless","difficulty","decompensation","verbally abusive behavior","suicidal","feeling suicidal");
$suicide_attempt=array("hallucinations auditory","sleeplessness","suicidal","motor retardation","weepiness","unable to concentrate","todd paralysis","worry","fatigue","tremor","alcoholic withdrawal symptoms","agitation","unresponsiveness","blackout","withdraw","difficulty","irritable mood","sensory discomfort","drowsiness","formication","unconscious state","fever","cough");
$hiv_infections=array("fever","night sweat","spontaneous rupture of membranes","cough","decreased body weight","chill","diarrhea","pleuritic pain","patient non compliance","tachypnea","productive cough","muscle hypotonia","hypotonic","feeling suicidal");
$benign_prostatic_hypertrophy=array("mental status changes","cachexia","blackout","orthostasis","orthopnea","night sweat","distress respiratory","anorexia","dysarthria");
$HIV=array("fever","night sweat","spontaneous rupture of membranes","cough","decreased body weight","chill","diarrhea","pleuritic pain","patient non compliance","tachypnea","productive cough","muscle hypotonia","hypotonic","feeling suicidal");
$bacteremia=array("fever","chill","flushing","unresponsiveness","indifferent mood","urinoma","vomiting","distended abdomen","hypoalbuminemia","pustule","prostatism","diarrhea","abdominal tenderness","pleuritic pain","decreased translucency","pallor");
$neutropenia=array("transaminitis","splenomegaly","night sweat","apyrexial","lesion","snuffle","chill","cough","monoclonal","hypocalcemia result","oliguria","rhd positive","distress respiratory");
$hepatitis_B=array("inappropriate affect","tachypnea","yellow sputum","projectile vomiting","poor feeding","pain abdominal","abdominal tenderness","wheelchair bound","moan");
$hepatitis_C=array("ascites","distended abdomen","feeling suicidal","cough","ache","macerated skin","heavy feeling","hallucinations auditory","chill","asterixis","patient non compliance");
$coronary_heart_disease=array("pain chest","angina pectoris","shortness of breath","hypokinesia","sweat","sweating increased","pressure chest","dyspnea on exertion","orthopnea","chest tightness");
$carcinoma_of_lung=array("lesion","cough","lung nodule","shortness of breath","haemoptysis","debilitation","gurgle","ache","rale","night sweat","decreased translucency","asthenia","metastatic lesion","agitation","irritable mood");
$arthritis=array("pain","hemodynamically stable","sleeplessness","asthenia","syncope","swelling","atypia","general unsteadiness","shortness of breath","distended abdomen");
$malignant_neoplasm_of_lung=array("lesion","cough","lung nodule","shortness of breath","haemoptysis","debilitation","gurgle","ache","rale","night sweat","decreased translucency","asthenia","metastatic lesion","agitation","irritable mood");
$carcinoma=array("mass of body structure","pain","lesion","tumor cell invasion","thicken","decreased body weight","hoarseness","general discomfort","metastatic lesion","non-productive cough","constipation","unhappy","paresthesia","gravida 0","diarrhea","sore to touch","heartburn","nausea","lung nodule");
$delirium=array("unsteady gait","withdraw","hyponatremia","verbally abusive behavior","feeling suicidal","unresponsiveness","worry","drowsiness","sleepy","hallucinations auditory","suicidal","fever","diarrhea");
$melanoma=array("mass of body structure","paraparesis","fever","gravida 0","pain","pruritus","mass in breast","vomiting","diarrhea");
$kidney_failure_acute=array("hyperkalemia","hypotension","hypocalcemia result","oliguria","hemodynamically stable","asthenia","hypothermia"," natural","diarrhea","haemorrhage","unresponsiveness");
$diabetes=array("polyuria","polydypsia","shortness of breath","pain chest","asthenia","nausea","orthopnea","rale","sweat","sweating increased","unresponsiveness","mental status changes","vertigo","vomiting","labored breathing");
$systemic_infection=array("fever","distress respiratory","hypotension","tachypnea","chill","lethargy","bradycardia","breech presentation","cyanosis","spontaneous rupture of membranes","haemorrhage","unresponsiveness","rale","apyrexial");
$malignant_neoplasms=array("pain","mass of body structure","lesion","cushingoid facies","cushingoid habitus","emphysematous change","decreased body weight","ascites","hoarseness","thicken","hematuria","pulsus paradoxus","gravida 10","mass of body structure","lesion","heartburn","night sweat","thicken","chill","decreased translucency","pain abdominal","dullness","food intolerance","distress respiratory","hypotension");
$neuropathy=array("asthenia","numbness","nausea and vomiting","awakening early","hydropneumothorax","superimposition","fatigability","tenesmus","pain","slowing of urinary stream");
$overload_fluid=array("rale","jugular venous distention","hyperkalemia","orthopnea","shortness of breath","drowsiness","sleepy","weight gain","hypokalemia","hypotension","swelling","distended abdomen");
$migraine_disorders=array("ambidexterity","vomiting","dizziness","numbness","nausea","fever","splenomegaly");
$diseases=array("influenza
"=>$influenza
,"gastritis
"=>$gastritis
,"hypercholesterolemia
"=>$hypercholesterolemia
,"epilepsy
"=>$epilepsy
,"insufficiency_renal
"=>$insufficiency_renal
,"dehydration
"=>$dehydration
,"hypothyroidism
"=>$hypothyroidism
,"hernia_hiatal
"=>$hernia_hiatal
,"fibroid_tumor
"=>$fibroid_tumor
,"deglutition_disorder
"=>$deglutition_disorder
,"osteoporosis
"=>$osteoporosis
,"chronic_alcoholic_intoxication
"=>$chronic_alcoholic_intoxication
,"asthma
"=>$asthma
,"sepsis_invertebrate
"=>$sepsis_invertebrate
,"paranoia
"=>$paranoia
,"ileus
"=>$ileus
,"neoplasm
"=>$neoplasm
,"obesity_morbid
"=>$obesity_morbid
,"primary_malignant_neoplasm
"=>$primary_malignant_neoplasm
,"failure_heart
"=>$failure_heart
,"malignant_neoplasm_of_breast
"=>$malignant_neoplasm_of_breast
,"tonic_clonic_epilepsy
"=>$tonic_clonic_epilepsy
,"transient_ischemic_attack
"=>$transient_ischemic_attack
,"malignant_neoplasm_of_prostate
"=>$malignant_neoplasm_of_prostate
,"embolism_pulmonary
"=>$embolism_pulmonary
,"tricuspid_valve_insufficiency
"=>$tricuspid_valve_insufficiency
,"respiratory_failure
"=>$respiratory_failure
,"degenerative_polyarthritis
"=>$degenerative_polyarthritis
,"aphasia
"=>$aphasia
,"neoplasm_metastasis
"=>$neoplasm_metastasis
,"malignant_tumor_of_colon
"=>$malignant_tumor_of_colon
,"lymphoma
"=>$lymphoma
,"anemia
"=>$anemia
,"chronic_obstructive_airway_disease
"=>$chronic_obstructive_airway_disease
,"sickle_cell_anemia
"=>$sickle_cell_anemia
,"coronary_arteriosclerosis
"=>$coronary_arteriosclerosis
,"cholecystitis
"=>$cholecystitis
,"psychotic_disorder
"=>$psychotic_disorder
,"thrombus
"=>$thrombus
,"chronic_kidney_failure
"=>$chronic_kidney_failure
,"depressive_disorder
"=>$depressive_disorder
,"myocardial_infarction
"=>$myocardial_infarction
,"obesity
"=>$obesity
,"infection_urinary_tract
"=>$infection_urinary_tract
,"tachycardia_sinus
"=>$tachycardia_sinus
,"gout
"=>$gout
,"hyperglycemia
"=>$hyperglycemia
,"diverticulosis
"=>$diverticulosis
,"failure_kidney
"=>$failure_kidney
,"schizophrenia
"=>$schizophrenia
,"decubitus_ulcer
"=>$decubitus_ulcer
,"encephalopathy
"=>$encephalopathy
,"affect_labile
"=>$affect_labile
,"carcinoma_prostate
"=>$carcinoma_prostate
,"Alzheimers_disease
"=>$Alzheimers_disease
,"incontinence
"=>$incontinence
,"hyperbilirubinemia
"=>$hyperbilirubinemia
,"paroxysmal_dyspnea
"=>$paroxysmal_dyspnea
,"bipolar_disorder
"=>$bipolar_disorder
,"pericardial_effusion_body_substance
"=>$pericardial_effusion_body_substance
,"adhesion
"=>$adhesion
,"biliary_calculus
"=>$biliary_calculus
,"endocarditis
"=>$endocarditis
,"acquired_immuno-deficiency_syndrome
"=>$acquired_immuno_deficiency_syndrome
,"pneumothorax
"=>$pneumothorax
,"accident_cerebrovascular
"=>$accident_cerebrovascular
,"confusion
"=>$confusion
,"candidiasis
"=>$candidiasis
,"anxiety_state
"=>$anxiety_state
,"cirrhosis
"=>$cirrhosis
,"pancytopenia
"=>$pancytopenia
,"oral_candidiasis
"=>$oral_candidiasis
,"diverticulitis
"=>$diverticulitis
,"spasm_bronchial
"=>$spasm_bronchial
,"ulcer_peptic
"=>$ulcer_peptic
,"depression_mental
"=>$depression_mental
,"emphysema_pulmonary
"=>$emphysema_pulmonary
,"hypoglycemia
"=>$hypoglycemia
,"dependence
"=>$dependence
,"osteomyelitis
"=>$osteomyelitis
,"hemorrhoids
"=>$hemorrhoids
,"primary_carcinoma_of_the_liver_cells
"=>$primary_carcinoma_of_the_liver_cells
,"pyelonephritis
"=>$pyelonephritis
,"pancreatitis
"=>$pancreatitis
,"cholelithiasis
"=>$cholelithiasis
,"cardiomyopathy
"=>$cardiomyopathy
,"Pneumocystis_carinii_pneumonia
"=>$Pneumocystis_carinii_pneumonia
,"carcinoma_colon
"=>$carcinoma_colon
,"edema_pulmonary
"=>$edema_pulmonary
,"carcinoma_breast
"=>$carcinoma_breast
,"hemiparesis
"=>$hemiparesis
,"mitral_valve_insufficiency
"=>$mitral_valve_insufficiency
,"peripheral_vascular_disease
"=>$peripheral_vascular_disease
,"tonic_clonic_seizures
"=>$tonic_clonic_seizures
,"effusion_pericardial
"=>$effusion_pericardial
,"thrombocytopaenia
"=>$thrombocytopaenia
,"adenocarcinoma
"=>$adenocarcinoma
,"failure_heart_congestive
"=>$failure_heart_congestive
,"exanthema
"=>$exanthema
,"ischemia
"=>$ischemia
,"hypertension_pulmonary
"=>$hypertension_pulmonary
,"infection
"=>$infection
,"cellulitis
"=>$cellulitis
,"lymphatic_diseases
"=>$lymphatic_diseases
,"gastroenteritis
"=>$gastroenteritis
,"parkinson_disease
"=>$parkinson_disease
,"hernia
"=>$hernia
,"colitis
"=>$colitis
,"deep_vein_thrombosis
"=>$deep_vein_thrombosis
,"personality_disorder
"=>$personality_disorder
,"hyperlipidemia
"=>$hyperlipidemia
,"pneumonia
"=>$pneumonia
,"gastroesophageal_reflux_disease
"=>$gastroesophageal_reflux_disease
,"pneumonia_aspiration
"=>$pneumonia_aspiration
,"stenosis_aortic_valve
"=>$stenosis_aortic_valve
,"hypertensive_disease
"=>$hypertensive_disease
,"glaucoma
"=>$glaucoma
,"septicemia
"=>$septicemia
,"bronchitis
"=>$bronchitis
,"delusion
"=>$delusion
,"upper_respiratory_infection
"=>$upper_respiratory_infection
,"ketoacidosis_diabetic
"=>$ketoacidosis_diabetic
,"manic_disorder
"=>$manic_disorder
,"suicide_attempt
"=>$suicide_attempt
,"hiv_infections
"=>$hiv_infections
,"benign_prostatic_hypertrophy
"=>$benign_prostatic_hypertrophy
,"HIV
"=>$HIV
,"bacteremia
"=>$bacteremia
,"neutropenia
"=>$neutropenia
,"hepatitis_B
"=>$hepatitis_B
,"hepatitis_C
"=>$hepatitis_C
,"coronary_heart_disease
"=>$coronary_heart_disease
,"carcinoma_of_lung
"=>$carcinoma_of_lung
,"arthritis
"=>$arthritis
,"malignant_neoplasm_of_lung
"=>$malignant_neoplasm_of_lung
,"carcinoma
"=>$carcinoma
,"delirium
"=>$delirium
,"melanoma
"=>$melanoma
,"kidney_failure_acute
"=>$kidney_failure_acute
,"diabetes
"=>$diabetes
,"systemic_infection
"=>$systemic_infection
,"malignant_neoplasms
"=>$malignant_neoplasms
,"neuropathy
"=>$neuropathy
,"overload_fluid
"=>$overload_fluid
,"migraine_disorders
"=>$migraine_disorders);
//print_r($user_symptoms);
foreach($diseases as $key=>$disease)
{
    $match=array_intersect($user_symptoms,$disease);
    $occured_symptoms=count($match);
    $total_symptoms=count($disease);
    $occured_percent=($occured_symptoms/$total_symptoms)*100;
    if($occured_percent!=0)
    {
        echo '<br>Disease: '.$key.'chance = '.$occured_percent.'%';
        print_r($user_symptoms);
    }
}

?>