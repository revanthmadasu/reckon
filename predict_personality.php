<html>
<head>
        <title>
            Predictor
        </title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link rel="icon" href="images/favicon.gif" type="image/gif" sizes="32x32">
        <script>
        var count=0,max=5;
        var i=0,e=0,s=0,n=0,t=0,f=0,j=0,p=0;
        var questions=[' At a party do you',' Are you more','Is it worse to','Are you more impressed by','Are more drawn toward the','Do you prefer to work','Do you tend to choose','At parties do you','Are you more attracted to','Are you more interested in','In judging others are you more swayed by',' In approaching others is your inclination to be somewhat','Are you more','Does it bother you more having things','In your social groups do you','In doing ordinary things are you more likely to','Writers should','Which appeals to you more','Are you more comfortable in making','Do you want things','Would you say you are more','In phoning do you','Facts','Are visionaries','Are you more often','Is it worse to be','Should one usually let events occur','Do you feel better about','In company do you','Common sense is','Children often do not',' In making decisions do you feel more comfortable with','Are you more','Which is more admirable','Do you put more value on','Does new and non-routine interactionwith others','Are you more frequently','Are you more likely to','Which is more satisfying','Which rules you more','Are you more comfortable with work thatis','Do you tend to look for','Do you prefer','Do you go more by','Are you more interested in','Which is more of a compliment','Do you value in yourself more that youare','Do you more often prefer the ','Are you more comfortable','Do you','Are you more likely to trust your','Do you feel','Which person is more to be complimented– one of','Are you inclined more to be','Is it preferable mostly to','In relationships should most things be','When the phone rings do you','Do you prize more in yourself','Are you drawn more to','Which seems the greater error','Do you see yourself as basically','Which situation appeals to you more','Are you more inclined to be','Are you a person that is more','In writings do you prefer','Is it harder for you to',' Which do you wish more for yourself','68. Which is the greater fault','Do you prefer the','Do you tend to be more'];
        var option1=[' Interact with many, including strangers',' Realistic than speculative',' Have your “head in the clouds','Principles','Convincing','To deadlines','Rather carefully',' Stay late, with increasing energy','Sensible people','What is actual','Laws than circumstances','Objective','Punctual','Incomplete','Keep abreast of other’s happenings','Do it the usual way',' “Say what they mean and mean what theysay”','Consistency of thought','Logical judgments','Settled and decided','Serious and determined','Rarely question that it will all be said','“Speak for themselves”','somewhat annoying','a cool-headed person','unjust','by careful selection and choice ','having purchased','initiate conversation','rarely questionable','make themselves useful enough','standards','firm than gentle','the ability to organize and be methodical','infinite','stimulate and energize you','a practical sort of person','see how others are useful','to discuss an issue thoroughly ','your head','contracted','the orderly','many friends with brief contact','facts','a. production and distribution ','a. “There is a very logical person.”','unwavering','final and unalterable statement','after a decision','speak easily and at length with strangers','experience','more practical than ingenious','clear reason ','fair-minded','make sure things are arranged','re-negotiable','hasten to get to it first','a strong sense of reality','fundamentals','to be too passionate','hard-headed','the structured and scheduled','routinized than whimsical','easy to approach','the more literal','identify with others','clarity of reason','being indiscriminate','planned event','deliberate than spontaneous'];
        var option2=[' Interact with a few, known to you',' Speculative than realistic', 'Be "In a rut"','Emotions','Touching','Just “whenever”','Somewhat impulsively','Leave early with decreased energy','Imaginative people','What is possible','Circumstances than laws','Personal','Leisurely','Completed','Get behind on the news','Do it your own way','Express things more by use of analogy','Harmonious human relationships','Value judgments','Unsettled and undecided','Easy-going','Rehearse what you’ll say','Illustrate principles','rather fascinating','a warm-hearted person','merciless','by careful selection and choice','having the option to buy','wait to be approached','frequently questionable','exercise their fantasy enough','feelings','gentle than firm','the ability to adapt and make do','open-minded','tax your reserves','a fanciful sort of person','see how others see','to arrive at agreement on an issue','your heart','done on a casual basis','whatever turns up ','a few friends with more lengthy contact','principles','design nd research','“There is a very sentimental person.”','devoted','tentative and preliminary statement','before a decision','find little to say to strangers','hunch','more ingenious than practical','strong feeling','sympathetic','just let things happen','random and circumstantial','hope someone else will answer','a vivid imagination','overtones','to be too objective','soft-hearted','the unstructured and unscheduled','whimsical than routinized','somewhat reserved','the more figurative','utilize others','strength of compassion','being critical','unplanned event','spontaneous than deliberate'];
        var do_test=function()
        {
            if(count==70)
               {
                   var resultTag=document.getElementById('result');
                   resultTag.innerHTML='Introvert: '+i+'\nExtrovert: '+e+'\n\nSensing: '+s+'\nIntuition: '+n+'\n\nThinking :'+t+'\nFeeling: '+f+'\n\nJudging: '+j+'\nPerceiving: '+p;
               }
            else
            {
                var questionTag=document.getElementById('question');
                var option1Tag=document.getElementById('option1');
                var option2Tag=document.getElementById('option2');
                if(option1Tag==null)
                document.write("not");
                var x=count+1;
                document.getElementById("question").innerHTML=x+' '+questions[count];
                option1Tag.innerHTML=option1[count];
                option2Tag.innerHTML=option2[count];
                ++count;
            }
        }
        
        var selectOption1=function()
        {
            console.log(count);
            if(count>=70) {
                draw();return;}
            switch(count%7)
            {
                case 0:++e;break;
                case 1:
                case 2:++s;break;
                case 3:
                case 4:++t;break;
                case 5:
                case 6:++j;break;
            }
            do_test();
        }
        var selectOption2=function()
        {
            console.log(count);
            if(count>=70) {draw();return;}
            switch(count%7)
            {
                case 0:++i;break;
                case 1:
                case 2:++n;break;
                case 3:
                case 4:++f;break;
                case 5:
                case 6:++p;break;
            }
            do_test();
        }

        function draw()
        {
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(chart1);
            google.charts.setOnLoadCallback(chart2);
            google.charts.setOnLoadCallback(chart3);
            google.charts.setOnLoadCallback(chart4);
        }
        function chart1()
        {
            var data = google.visualization.arrayToDataTable([['Dimension', 'Score'],['Intraversion', i],['Extraversion', e]]);
            var options = {'title':'Intraversion vs Extraversion', 'width':550, 'height':400};
            var chart = new google.visualization.PieChart(document.getElementById('eires'));
            chart.draw(data, options);
        }
        function chart2()
        {
            var data = google.visualization.arrayToDataTable([['Dimension', 'Score'],['Sensing', s],['Intuition', n]]);
            var options = {'title':'Sensing vs Intuition', 'width':550, 'height':400};
            var chart = new google.visualization.PieChart(document.getElementById('snres'));
            chart.draw(data, options);
        }
        function chart3()
        {
            var data = google.visualization.arrayToDataTable([['Dimension', 'Score'],['Thinking', t],['Feeling', f]]);
            var options = {'title':'Thinking vs Feeling', 'width':550, 'height':400};
            var chart = new google.visualization.PieChart(document.getElementById('tfres'));
            chart.draw(data, options);
        }
        function chart4()
        {
            var data = google.visualization.arrayToDataTable([['Dimension', 'Score'],['Judging', j],['Perceiving', p]]);
            var options = {'title':'Judging vs Perceiving', 'width':550, 'height':400};
            var chart = new google.visualization.PieChart(document.getElementById('jpres'));
            chart.draw(data, options);
        }
        </script>
</head>
<body>
        <h3 id='question' name='question'></h3>
        <button onclick="selectOption1()"><h4 id='option1'></h4></button>
        <button onclick="selectOption2()"><h4 id='option2'></h4></button>
        <div id='result'>
        <div id='eires'></div>
        <div id='snres'></div>
        <div id='tfres'></div>
        <div id='jpres'></div>
        </div>
        <script>
    do_test();
    </script>
</body>
</html>