<?php session_start() ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Predictor </title>
  <link rel="icon" href="images/favicon.gif" type="image/gif" sizes="32x32">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://code.jquery.com/resources/demos/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
        'nasal flaring', 'sneeze', 'disequilibrium', 'hypometabolism', 'unwell', 'history of - blackout', 'prodrome', 'para 2', 'abortion', 'intermenstrual heavy bleeding', 'previous pregnancies 2', 'primigravida', 'proteinemia', 'titubation', 'dysdiadochokinesia', 'sniffle', 'bradykinesia', 'hoard', 'panic', 'abdomen acute', 'air fluid level', 'catching breath', 'anosmia', 'sedentary', 'natural', 'feels hot/feverish', 'pansystolic murmur', 'rambling speech', 'clumsiness', 'bruit', 'nonsmoker', 'low back pain', 'charleyhorse', 'pain neck', 'welt', 'tinnitus', 'breakthrough pain', 'pain back', "Murphy's sign", 'gasping for breath', 'feces in rectum', 'abnormally hard consistency', 'hypertonicity', 'st segment elevation', 'st segment depression', 'snore', 'r wave feature', 'tired', 'overweight', 'renal angle tenderness', 'alcohol binge episode', 't wave inverted', 'fecaluria', 'heme positive', 'pneumatouria', 'no status change', 'hypersomnolence', 'underweight', 'uncoordination', 'tonic seizures', 'dysesthesia', 'passed stones', 'ataxia', 'hemianopsia homonymous', 'drool', 'pin-point pupils', 'tremor resting', 'groggy', 'muscletwitch', 'fear of falling', 'behavior hyperactive', 'hyperhidrosis disorder', 'mydriasis', 'extrapyramidal sign', 'exhaustion hepatitis', 'flatulence', 'large-for-dates fetus', 'para 1', 'immobile', 'flare', 'cardiovascular finding', 'cardiovascular event', 'soft tissue swelling', 'lightheadedness', 'hot flush', 'consciousness clear', 'bleeding of vagina', 'hypoproteinemia', 'adverse reaction', 'adverse effect', 'abdominal bloating', 'red blotches', 'dysuria', 'colic abdominal', 'no known drug allergies', 'hypoxemia', 'out of breath', 'behavior showing increased motor activity', 'coordination abnormal', 'hypercapnia', 'has religious belief', 'choke', 'incoherent', 'qt interval prolonged', 'lameness', 'claudication', 'clammy skin', 'prostate tender', 'difficulty passing urine', 'pain foot', 'bowel sounds decreased', 'hunger', 'guaiac positive', 'numbness of hand', 'room spinning', 'hematocrit decreased', 'stool color yellow', 'rigor - temperature-associated observation', 'dyspareunia', 'poor dentition', 'floppy', 'dizzy spells', 'shooting pain', 'systolic ejection murmur', 'hyperemesis', 'urgency of micturition', "Heberden's node", 'retropulsion', 'estrogen use', 'paresis', 'aphagia', 'speech slurred', 'focal seizures', 'abnormal sensation', 'stinging sensation', 'paralyse', 'rest pain', 'lip smacking', 'myoclonus', 'phonophobia', 'rolling of eyes', 'hirsutism', 'moody', 'muscle twitch', 'absences finding', 'spasm', 'pericardial friction rub', 'sputum purulent', 'intoxication', 'monocytosis', 'posterior rhinorrhea', 'decreased stool caliber', 'hematochezia', 'cicatrisation', 'scar tissue', 'macule', 'headache', 'arthralgia', 'photophobia', 'painful swallowing', 'sinus rhythm', 'asymptomatic', "Stahli's line", 'heavy legs', 'neck stiffness', 'left atrial hypertrophy', 'abscess bacterial', 'hypesthesia', 'hyperacusis', 'fremitus', 'hepatomegaly', 'breath-holding spell', 'scleral icterus', 'myalgia', 'retch', 'achalasia', 'stiffness', 'hyperventilation', 'excruciating pain', 'gag', 'posturing', 'pulse absent', 'urge incontinence', 'pain in lower limb', 'cardiomegaly', 'erythema', 'redness', 'nightmare', 'transsexual', 'mood depressed', 'scratch marks', 'side pain', 'enuresis', 'homelessness', 'photopsia', 'breath sounds decreased', 'green sputum', 'malaise', 'satiety early', 'throbbing sensation quality', 'presence of q wave', 'mediastinal shift', 'clonus', 'extreme exhaustion', 'stupor', 'hemiplegia', 'chest discomfort', 'systolic murmur', 'sciatica', 'frothy sputum', 'palpitation', 'burning sensation', 'hepatosplenomegaly', 'hacking cough', 'stridor', 'loose associations', 'giddy mood', 'neologism', 'homicidal thoughts', 'disturbed family', 'catatonia', 'terrify', 'impaired cognition', 'throat sore', 'wheezing', 'stuffy nose', 'egophony', 'barking cough', 'polymyalgia', 'dyspnea', 'rapid shallow breathing', 'noisy respiration', 'nasal discharge present', 'frail', 'cystic lesion', 'symptom aggravating factors', 'hemodynamically stable dementia', 'fall', 'ecchymosis', 'bedridden', 'facial paresis', 'rhonchus', 'milky', 'feeling strange', 'nervousness', 'regurgitates after swallowing', 'vision blurred', 'urinary hesitation', 'seizure', 'aura', 'energy increased', 'hypersomnia', 'blanch', 'hallucinations visual', 'elation', 'verbal auditory hallucinations', 'feeling hopeless', 'decompensation', 'motor retardation', 'weepiness', 'unable to concentrate', 'todd paralysis', 'fatigue', 'tremor', 'alcoholic withdrawal symptoms', 'difficulty', 'sensory discomfort', 'formication', 'unconscious state', 'cachexia', 'blackout', 'orthostasis', 'anorexia', 'dysarthria', 'productive cough', 'muscle hypotonia', 'hypotonic', 'flushing', 'indifferent mood', 'urinoma', 'hypoalbuminemia', 'pustule', 'prostatism', 'pleuritic pain', 'pallor', 'transaminitis', 'snuffle', 'monoclonal', 'rhd positive', 'inappropriate affect', 'yellow sputum', 'projectile vomiting', 'poor feeding', 'abdominal tenderness', 'wheelchair bound', 'moan', 'macerated skin', 'heavy feeling', 'asterixis', 'patient non compliance', 'angina pectoris', 'hypokinesia', 'pressure chest', 'dyspnea on exertion', 'chest tightness', 'sleeplessness', 'syncope', 'atypia', 'general unsteadiness', 'cough', 'haemoptysis', 'debilitation', 'gurgle', 'ache', 'agitation', 'irritable mood', 'tumor cell invasion', 'general discomfort', 'metastatic lesion', 'non-productive cough', 'constipation', 'unhappy', 'paresthesia', 'sore to touch', 'lung nodule', 'unsteady gait', 'withdraw', 'hyponatremia', 'verbally abusive behavior', 'feeling suicidal', 'worry', 'hallucinations auditory', 'suicidal', 'paraparesis', 'gravida 0', 'pruritus', 'mass in breast', 'hypocalcemia result', 'oliguria', 'hemodynamically stable', 'hypothermia', ' natural', 'diarrhea', 'polyuria', 'polydypsia', 'pain chest', 'sweat', 'sweating increased', 'mental status changes', 'vertigo', 'labored breathing', 'tachypnea', 'lethargy', 'bradycardia', 'breech presentation', 'cyanosis', 'spontaneous rupture of membranes', 'haemorrhage', 'unresponsiveness', 'apyrexial', 'cushingoid facies', 'cushingoid habitus', 'emphysematous change', 'decreased body weight', 'ascites', 'hoarseness', 'hematuria', 'pulsus paradoxus', 'gravida 10', 'mass of body structure', 'lesion', 'heartburn', 'night sweat', 'thicken', 'chill', 'decreased translucency', 'pain abdominal', 'dullness', 'food intolerance', 'distress respiratory', 'asthenia', 'nausea and vomiting', 'awakening early', 'hydropneumothorax', 'superimposition', 'fatigability', 'tenesmus', 'pain', 'slowing of urinary stream', 'rale', 'jugular venous distention', 'hyperkalemia', 'orthopnea', 'shortness of breath', 'drowsiness', 'sleepy', 'weight gain', 'hypokalemia', 'hypotension', 'swelling', 'distended abdomen', 'ambidexterity', 'vomiting', 'dizziness', 'numbness', 'nausea', 'fever', 'splenomegaly'
    ];
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#tags" )
      // don't navigate away from the field on tab when selecting an item
      .on( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        minLength: 0,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( $.ui.autocomplete.filter(
            availableTags, extractLast( request.term ) ) );
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
      });
  } );
  </script>
</head>
<body>
<header role="banner" id="header">
        <nav class="navbar navbar-static-top navbar-inverse" style="background:#000000;">
        <div class="container-fluid">
            <div class="navbar-header">
             <ul class="nav navbar-nav navbar-left ">
                 <li><image src="images/logo.png"></image></li> 
                <li><h3 style="font-family: 'Pacifico', cursive; color:white" align="justify">&nbspPredictor</h3></li>
             </ul> 
            </div>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <div class="collapse navbar-collapse navHeaderCollapse">
            <?php
                if(!isset($_SESSION['id']))
                echo '
                <ul class="nav navbar-nav navbar-right ">
                    <li><a data-target="#loginModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                    <li><a data-target="#signupModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> SignUp</a></li>
                </ul>
                ';
                else
                {
                    echo '<ul class="nav navbar-nav navbar-right ">
                    <li><a ><span class="glyphicon glyphicon-user"></span>'.$_SESSION['id'].'</a></li>
                    <li><a ><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
                    </ul>';
                }
            ?>
            </div>
         </div>
        </nav>
    </header>
<?php
 if(isset($_SESSION['id']))
 {
  echo '<form action="result.php" method="POST">
        <div class="ui-widget">
        <label for="tags">Symptoms: </label>
        <input id="tags" name="symptoms" size="50">
        <input type="submit" value="Generate">
        </div>
        </form>';
 }
 else 
 {
   echo '<h2> You need to <a data-target="#loginModal" data-toggle="modal">Login</a> to continue></h2>';
 }
 
?> 
<!-- Login Modal -->
<div class="modal fade" id="loginModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form name="form1" action="login.php" method="POST">
        <input type="text" name="id"placeholder="Email Id">
        <input type="password" name="password"placeholder="Password">
        <div class="modal-footer">
          <button class="submit" onClick="CheckPassword(document.form1.password)">Submit</button>
        </div>
        </form>
  </div>
</div> 
</div>
</div>
 <!-- END OF LOGIN Modal -->

<!-- signupModal -->
        <div class="modal fade" id="signupModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SignUp</h4>
                    </div>
                    <div class="modal-body">
                        <form action="signup.php" name="form1" method="POST">
                            <input type="text" name="name" placeholder="Enter Name"><br><br>
                            <input type="text" name="emailid" placeholder="Enter email"><br><br>
                            <input type="phone" name="phone" placeholder="Enter Phone"><br><br>
                            DOB:<input type="date" name="dob" placeholder="Enter Date Of Birth"><br><br>
                            <input type="password" name="password" placeholder="Enter password" onkeydown="CheckPassword(document.form1.password)"><p id="ppwd"></p><br>
                            <input type="password" name="cpassword" placeholder="Confirm Password"><p id="pcpwd"></p><br><br>
                            <div class="modal-footer">
                                <button class="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- End of SignUp Modal -->

 
</body>
</html>