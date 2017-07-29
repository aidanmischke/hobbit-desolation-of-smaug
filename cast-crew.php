<?php
## Load Functions
require_once('include/functions.php');
?>
<?php print "<?xml version=\"1.0\" encoding=\"utf-8\"?>" ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!--author-->
<?php
## Include author.php
require_once('include/author.php');
?>
   <head>
       <!--head-->
       <?php
       ## Determines which current page link is to be highlighted
       if(!isset($current)) { $current = basename(__FILE__, '.php'); }
       ## Include head.php
       require_once('include/head.php');
       ?>
   </head>
   <body>

<!--header-->
<?php
## Determines which current page link is to be highlighted
if(!isset($current)) { $current = basename(__FILE__, '.php'); }
## Include header.php
require_once('include/header.php');
?>

   	     <!--****************************************************************************
         Cast & Crew
         *****************************************************************************-->
      <div class="banner">
         <h1>Cast &amp; Crew</h1>
      </div>
      <!--end of banner-->
      <div class="banner-container center">
         <div class="banner-half">
            <h2>Actor</h2>
         </div>
         <div class="banner-half">
            <h2>Character</h2>
         </div>
      </div>
      <!--end of banner-container-->
      <div class="first column merge">
         <h3 class="spacing center">Ian McKellen</h3>
         <p>
            <img class="cast img-center" src="img/cast/ian-mckellen.jpg" alt="Ian McKellen."  
               />
         </p>
         <p class="initial">
            Ian McKellen, born and raised in the north of England, has been honored with over 50 international
            acting awards during his more than half a century on stage and screen. He is beloved by fans worldwide as Magneto in
            the "X&ndash;Men" films and Gandalf in "The Lord of the Rings" and "The Hobbit" trilogies.
            <br/>
            <br/>
            In 1991, Sir Ian was
            knighted for services to theatre in UK. He is a co&ndash;founder of Stonewall UK, which lobbies for legal and social equality
            for gay people. In 2008, the Queen personally appointed him Companion of Honour, for his services to drama and to
            equality.
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Gandalf the Grey</h3>
         <p>
            <img class="char img-center" src="img/char/gandalf.jpg" alt="Gandalf the Grey."/>
         </p>
         <p class="initial">
            Gandalf is a fictional character in J. R. R. Tolkien's novels The Hobbit and The Lord of the Rings. He
            appears as a wizard, member and later the head (after Saruman's betrayal and fall) of the order known as the Istari, as
            well as leader of the Fellowship of the Ring and the army of the West. In The Lord of the Rings, he is initially known
            as Gandalf the Grey, but returns from death as Gandalf the White.
         </p>
      </div>
      <!--end of column2-->
      <div class="first column merge">
         <h3 class="spacing center">Martin Freeman</h3>
         <p>
            <img class="cast img-center" src="img/cast/martin-freeman.jpg" alt="Martin Freeman."/>
         </p>
         <p class="initial">
            Martin Freeman earned an Emmy nomination in the category of Best Supporting Actor in a Drama Series for
            his portrayal of Dr. John Watson on the award&ndash;winning BBC television series "Sherlock." Freeman also won a BAFTA TV
            Award and received a second nomination for his work on the program, which debuted in 2010 and is now entering its third
            season.
            <br/>
            <br/>
            Freeman was already familiar to television audiences for the role of Tim Canterbury on Ricky
            Gervais's original hit comedy series "The Office." He starred for three seasons on the hugely acclaimed show, earning a
            BAFTA TV Award nomination and two British Comedy Award nominations for his performance.
            <br/>
            <br/>
            In "The Hobbit: The
            Desolation of Smaug," Freeman reprises the role he first played in "The Hobbit: An Unexpected Journey." He will
            conclude his portrayal of Bilbo in next year's "The Hobbit: There and Back Again." Freeman's recent film credits also
            include the sci&ndash;fi comedy "The World's End," written by Edgar Wright and Simon Pegg, and directed by Wright, and the
            independent film "Svengali." He also lends his voice to the animated feature "Saving Santa."
            <br/>
            <br/>
            Freeman has
            been seen in a wide range of film roles, but is perhaps best known for his comedic roles. He starred opposite Joanna
            Page in the 2003 box office success "Love Actually," followed by the horror spoof "Shaun of the Dead," from Wright and
            Pegg. He later reunited with the writing duo on the 2007 cult hit "Hot Fuzz." He also starred as Arthur Dent in Garth
            Jennings' "The Hitchhiker's Guide to the Galaxy," the screen version of Douglas Adams' best&ndash;selling book, also starring
            Zooey Deschanel and Sam Rockwell. His other credits include the mockumentary "Confetti," "Nativity!," and the Aardman
            animated feature "The Pirates! Band of Misfits."
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Bilbo Baggins</h3>
         <p>
            <img class="char img-center" src="img/char/bilbo.jpg" alt="Bilbo Baggins."/>
         </p>
         <p class="initial">
            Bilbo Baggins is the title character and protagonist of J. R. R. Tolkien's 1937 novel The Hobbit, as well as a
            supporting character in The Lord of the Rings. In Tolkien's narrative conceit, in which all the writings of
            Middle-earth are translations from the fictitious volume of The Red Book of Westmarch, Bilbo is the author of The
            Hobbit and translator of various "works from the elvish" (as mentioned in the end of The Return of the King).
            <br /><br />
            In The Hobbit, Bilbo Baggins, a hobbit in comfortable middle age at 50 years old, was hired in spite of himself as a
            "burglar" by the wizard Gandalf and 13 dwarves led by their king Thorin Oakenshield on a quest to reclaim the Lonely
            Mountain and its treasure from the dragon Smaug. The adventure took Bilbo and the companions through the wilderness, to
            the elf haven of Rivendell, across the Misty Mountains and the black forest of Mirkwood, to Lake-town in the middle of
            Long Lake, and eventually to the Mountain itself. Here, after the dragon was killed and the Mountain reclaimed, the
            Battle of Five Armies took place.
            <br /><br />
            In his journey, Bilbo encountered other fantastic creatures, including trolls, elves,
            giant spiders, a man who can change shape into a bear, goblins, eagles, wolves and a slimy, murderous creature named
            Gollum. Underground, near Gollum's lair, Bilbo accidentally found a magic ring of invisibility, which he used to escape
            from Gollum.
         </p>
      </div>
      <!--end of column2-->
      <div class="first column merge">
         <h3 class="spacing center">Richard Armitage</h3>
         <p>
            <img class="cast img-center" src="img/cast/richard-armitage.jpg" alt="Richard Armitage."/>
         </p>
         <p class="initial">
            Richard Armitage has been a favorite of critics and audiences in the UK for several years, and his
            popularity is quickly rising worldwide.
            <br/>
            <br/>
            Armitage, who originated the part of Thorin Oakenshield in Peter
            Jackson's "The Hobbit: An Unexpected Journey," will reprise his role in the conclusion of the Trilogy, "The Hobbit:
            There and Back Again," due out in December 2014. Also in 2014, he stars in Steven Quale's action thriller "Into the
            Storm," slated for release in August.
            <br/>
            <br/>
            Armitage gained a huge fan following in the UK with starring roles in
            such high&ndash;profile television productions as "North and South," "Spooks (US title: MI&ndash;5)," "Robin Hood" and "Strike
            Back."
            <br/>
            <br/>
            His first film in the U.S. was the 2011 hit "Captain America: The First Avenger," directed by Joe
            Johnston and starring Chris Evans in the title role. Armitage played the super hero's nemesis, Heinz Kruger, in the
            film, which also starred Tommy Lee Jones, Stanley Tucci and Hayley Atwell.
            <br/>
            <br/>
            His recent television credits
            include "Macbeth," part of the BBC's 2005 "ShakespeaRe&ndash;told" miniseries, opposite James McAvoy and Keeley Hawes, and
            the ITV telefilm "Marple: Ordeal by Innocence." British TV audiences have also seen him on such programs as
            "Sparkhouse," "Cold Feet," "Ultimate Force" and "Between the Sheets."
            <br/>
            <br/>
            Born and raised in Leicester,
            England, Armitage was classically trained at the London Academy of Music and Dramatic Art (LAMDA). He has appeared in
            numerous stage productions, including such plays as "Hamlet," "The Four Alice Bakers," "Macbeth" and "The Duchess of
            Malfi."
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Thorin Oakenshield</h3>
         <p>
            <img class="char img-center" src="img/char/thorin.jpg" alt="Thorin Oakenshield."/>
         </p>
         <p class="initial">
            Thorin II Oakenshield, son of Thr&aacute;in, son of Thr&oacute;r, King under the Mountain is a fictional character in J. R. R.
            Tolkien's 1937 novel The Hobbit. Thorin is the leader of the Company of Dwarves who aim to reclaim the Lonely Mountain
            from Smaug the dragon. He is the son of Thr&aacute;in II, grandson of Thr&oacute;r, and becomes King of Durin's Folk during their
            exile from Erebor. Thorin's background is further elaborated in Appendix A of Tolkien's 1955 novel The Return of the
            King.
            <br/>
            <br/>
            In The Hobbit, Thorin and twelve other dwarves of Durin's Folk visited Bilbo Baggins on Gandalf's advice to hire Bilbo
            as a burglar to steal their treasure back from the dragon Smaug. Smaug had attacked Erebor (the Lonely Mountain) and
            had appropriated both the dwarves' mountain and their treasure. Thorin was determined to get the treasure back, and
            especially wanted the Arkenstone, the Heart of the Mountain, an heirloom of his house.
            <br/>
            <br/>
            On the journey the company
            encountered a band of trolls, and Thorin alone of the dwarves was not taken unawares. He and Gandalf fought valiantly
            in the goblin tunnels in the Misty Mountains. When the dwarves were captured by the wood-elves of Mirkwood, Thorin
            insisted that the other dwarves not disclose their quest to their captors. He was the first to emerge from the barrels
            at Lake-town and marched right up to the leaders of the town, declaring himself as King Under the Mountain.
         </p>
      </div>
      <!--end of column2-->
      <div class="first column merge">
         <h3 class="spacing center">Benedict Cumberbatch</h3>
         <p>
            <img class="cast img-center" src="img/cast/benedict-cumberbatch.jpg" alt="Benedict Cumberbatch."/>
         </p>
         <p class="initial">
            Benedict Cumberbatch is currently starring in Steve McQueen's widely acclaimed true&ndash;life drama "12 Years a
            Slave" and next appears in the film adaptation of the hit play "August: Osage County," as part of an all&ndash;star ensemble
            cast under the direction of John Wells. Earlier in 2013, he starred as Khan in J.J. Abrams' "Star Trek Into Darkness"
            and as Julian Assange in Bill Condon's "The Fifth Estate." His recent film credits also include Steven Spielberg's "War
            Horse," and Tomas Alfredson's "Tinker Tailor Soldier Spy," for which he received a British Independent Film Award
            nomination.
            <br/>
            <br/>
            Television audiences know Cumberbatch for his performance in the title role of the BBC's
            contemporized "Sherlock Holmes," for which he has garnered Emmy, Golden Globe and two BAFTA TV Award nominations. He
            earned his second Best Actor Emmy nomination this year for his performance in the HBO miniseries "Parade's
            End."
            <br/>
            <br/>
            Cumberbatch studied drama at the University of Manchester before training at the London Academy of
            Music and Dramatic Art.
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Smaug</h3>
         <p>
            <img class="char img-center" src="img/char/smaug.jpg" alt="Smaug."/>
         </p>
         <p class="initial">
            Smaug is a fictional dragon and the primary antagonist of J. R. R. Tolkien's 1937 novel The Hobbit. He is
            described as "a most specially greedy, strong and wicked wyrm".
            <br/>
            <br/>
            One of the last great dragons of Middle-earth, Smaug rose to prominence by laying waste to the town of Dale and
            capturing the Lonely Mountain (Erebor) with all of its treasure. These events occurred some 150 years before the events
            of The Hobbit, and Smaug was already centuries old at the time. 
            <br/>
            <br/>
            The Hobbit recounts the tale of a party of dwarves
            (consisting of a few of the original residents of the Lonely Mountain and their descendants) and the hobbit Bilbo
            Baggins (their titular burglar) to recapture the mountain and kill the dragon. In the book, the dragon is sometimes
            called Smaug the Golden or Smaug the Magnificent.
         </p>
      </div>
      <!--end of column2-->
      <div class="first column merge">
         <h3 class="spacing center">Orlando Bloom</h3>
         <p>
            <img class="cast img-center" src="img/cast/orlando-bloom.jpg" alt="Orlando Bloom."/>
         </p>
         <p class="initial">
            Orlando Bloom first created the role of Legolas in Peter Jackson's Oscar&reg;&ndash;winning "The Lord of the Rings"
            Trilogy. For the final film, "The Lord of the Rings: The Return of the King," he shared in several Best Ensemble
            awards, including a Screen Actors Guild (SAG) Award&reg;.
            <br/>
            <br/>
            Born in Canterbury, England, Bloom trained at the
            National Youth Theatre in London and he later earned a scholarship to study with the British American Drama Academy.
            After completing his scholarship, he made his feature film debut in "Wilde," starring Stephen Fry and Jude Law. Bloom
            was next accepted to London's Guildhall School of Music and Drama, where he performed in many stage productions,
            including "Peer Gynt" and "Twelfth Night." Upon graduation, a then unknown Bloom was cast in the films that launched
            his career, Jackson's screen adaptation of J.R.R. Tolkien's "The Lord of the Rings."
            <br/>
            <br/>
            In the summer of 2003,
            Bloom starred opposite Johnny Depp and Keira Knightley in the Jerry Bruckheimer&ndash;produced mega&ndash;hit "Pirates of the
            Caribbean: The Curse of the Black Pearl," directed by Gore Verbinski.
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Legolas</h3>
         <p>
            <img class="char img-center" src="img/char/legolas.jpg" alt="Legolas."/>
         </p>
         <p class="initial">
            Legolas is a fictional character in J. R. R. Tolkien's legendarium.
            Legolas was the son of Thranduil, King of the Woodland Realm of Northern Mirkwood, who appears as "the Elvenking"
            in The Hobbit. Thranduil ruled over the Silvan Elves or "Wood-elves" of Mirkwood.
            <br/>
            <br/>
            Although he lived among the
            Silvan Elves, Legolas was not one himself. His father Thranduil had originally come from Lindon; he and his son were
            actually Sindar, or "Grey Elves", called in the singular Sinda; "Sindarin" was their language. A small minority of
            Sindar (headed by Thranduil by the time of The Hobbit) ruled the predominantly Silvan Woodland Realm. Thranduil himself
            was the son of Oropher. Legolas' mother is never mentioned; the Elves of Mirkwood have no Queen at the time of The
            Hobbit. It is also unknown whether or not he had any siblings.
         </p>
      </div>
      <!--end of column2-->
      <div class="first column merge">
         <h3 class="spacing center">Evangeline Lilly</h3>
         <p>
            <img class="cast img-center" src="img/cast/evangeline-lilly.jpg" alt="Evangeline Lilly."/>
         </p>
         <p class="initial">
            Evangeline Lilly is perhaps best known for the starring role of "Kate Austen' on the thought&ndash;provoking series
            "Lost," which, over the course of six successful seasons, became one of the most discussed and debated shows in TV
            history. Lilly earned a Golden Globe Award nomination for "Best Actress in a Drama Series' for her work on the show,
            and also shared in a Screen Actors Guild (SAG) Award&reg; for "Outstanding Drama Series Ensemble' in 2006.
            <br/>
            <br/>
            On
            the big screen, Lilly appeared in Kathryn Bigelow's Oscar&reg;&ndash;winning Best Picture "The Hurt Locker," playing "Connie
            James,' the wife of Jeremy Renner's character. As part of the ensemble cast, Lilly earned her second SAG Award &reg;
            nomination, for "Outstanding Motion Picture Cast.'
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Tauriel</h3>
         <p>
            <img class="char img-center" src="img/char/tauriel.jpg" alt="Tauriel."/>
         </p>
         <p class="initial">
            Tauriel is a fictional character from Peter Jackson's feature film adaptation of J.R.R. Tolkien's The Hobbit. The
            character does not appear in the original book, but was created by Peter Jackson and Fran Walsh as an expansion of
            material adapted from the book, and first appears in the second film in that trilogy, The Desolation of Smaug, released
            December 13, 2013. She is a Woodland Elf whose name means "Daughter of the Forest", and is the head of the Mirkwood
            Elven guard. She is played by actress Evangeline Lilly.
         </p>
      </div>
      <!--end of column2-->
      <div class="first column merge">
         <h3 class="spacing center">Luke Evans</h3>
         <p>
            <img class="cast img-center" src="img/cast/luke-evans.jpg" alt="Luke Evans."/>
         </p>
         <p class="initial">
            Luke Evans has starred in numerous films, including most recently "Immortals" for director Tarsem
            Singh; "The Three Musketeers" for director Paul W.S. Anderson; "The Raven," starring opposite John Cusack for director
            James McTeigue; "No One Lives" for director Ryuhei Kitamura; and BBC's upcoming "The Great Train Robbery." He will
            reprise his role as Bard the Bowman in the final film in Peter Jackson's Trilogy, "The Hobbit: There and Back
            Again."
            <br/>
            <br/>
            Evans made his U.K. feature film debut in the role of Clive Richards in the 2010 BAFTA
            Award&ndash;nominated feature "Sex &amp; Drugs &amp; Rock &amp; Roll," Mat Whitecross' biopic of the London punk&ndash;rock scene founder Ian
            Dury of Ian Dury and the Blockheads.
            <br/>
            <br/>
            Evans recently completed production on "Dracula Untold," which Universal
            Pictures will release in Fall 2014. The film is based Bram Stoker's novel Dracula and Evans stars as the lead
            character, Vlad. Next up, Evans will begin production on his leading role in Relativity's remake of "The
            Crow."
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Bard</h3>
         <p>
            <img class="char img-center" src="img/char/bard.jpg" alt="Bard."/>
         </p>
         <p class="initial">
            Bard the Bowman, later known as Bard I, appears in The Hobbit. Bard of Esgaroth was a skilled archer and the heir of
            Girion, the last king of old Dale. He was described as "grim faced" and while a guardsman of Esgaroth he was often
            predicting floods and poisoned fish. He rallied the guards to defend the town when the dragon came. Bard was able to
            slay the dragon Smaug with the Black Arrow after a tip from the old thrush (who had overheard Bilbo Baggins'
            description of Smaug) had revealed an unarmoured spot on the dragon's underside. 
            <br/>
            <br/>
            Bard claimed a twelfth of the treasure
            amassed by the dragon, which he subsequently shared with the Master of Esgaroth to rebuild the town, but the Master
            stole the money and ran off into the wild where he died. After its rebuilding, Bard was the first king (Bard I) of
            restored Dale, followed by his son Bain, grandson Brand, and great-grandson Bard II. In Peter Jackson's three-part
            adaptation of The Hobbit, Bard is played by Welsh actor Luke Evans.
         </p>
      </div>
      <!--end of column2-->
      <div class="first column merge">
         <h3 class="spacing center">Lee Pace</h3>
         <p>
            <img class="cast img-center" src="img/cast/lee-pace.jpg" alt="Lee Pace."/>
         </p>
         <p class="initial">
            Lee Pace began his acting career as early as high school at the local Alley Theatre in Houston, Lee Pace was
            accepted at Juilliard, graduating with a Bachelor of Fine Arts. During this time, he honed his skills in such classic
            roles as Romeo in "Romeo &amp; Juliet," the title role in "King Richard II," and Cassius in "Julius Caesar," among
            others.
            <br/>
            <br/>
            On stage, Pace starred in the critically acclaimed Off&ndash;Broadway play "The Credeaux Canvas,"
            directed by Michael Mayer, as well as being part of the Vineyard production of "The Fourth Sister," written by Janusz
            Glowacki. He also performed in a limited engagement of the Off&ndash;Broadway production of "Small Tragedy," written by Craig
            Lucas, for which he was nominated for Outstanding Actor at the Lucille Lortel 2004 Awards.
            <br/>
            <br/>
            Pace was the
            star of the 2003 Sundance hit "Soldier's Girl," written by Ron Nyswaner and directed by Frank Pierson, which aired on
            Showtime. His breakthrough performance as a drag queen in love with a soldier garnered Pace a Golden Globe&reg; nomination,
            an Independent Spirit Award nomination and a Gotham Award for Outstanding Breakthrough Performance.
            <br/>
            <br/>
            Most recently, Pace was seen in Steven Spielberg's Oscar&reg;&ndash;nominated
            "Lincoln," opposite Daniel Day&ndash;Lewis, and as the Nomad Garrett in Bill Condon's "The Twilight Saga: Breaking Dawn Part
            2." He first played Thranduil in Peter Jackson's "The Hobbit: An Unexpected Journey," a role he reprises in "The
            Hobbit: The Desolation of Smaug" and the final film in the Trilogy, " The Hobbit: There and Back
            Again."
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Thranduil</h3>
         <p>
            <img class="char img-center" src="img/char/thranduil.jpg" alt="Thranduil."/>
         </p>
         <p class="initial">
            Thranduil is a fictional character in J. R. R. Tolkien's Middle-earth legendarium. He is a supporting character in The
            Hobbit.
            <br/>
            <br/>
            Thranduil first appears in The Hobbit as the Elvenking, when Bilbo and the Dwarves enter his realm in the northern part
            of Mirkwood. The Dwarves are captured by Thranduil's guards and locked in his dungeons when they refuse to divulge
            their intentions. The Dwarves are rescued by Bilbo, who has remained in hiding with his use of a magic ring of
            invisibility.
            <br/>
            <br/>
            After the death of the dragon Smaug, Thranduil along with the people of Lake-town demanded a share of the
            treasure of Erebor. War with the Dwarves was averted by the arrival of a goblin/warg army and the ensuing
            battle.
            <br/>
            <br/>
            Thranduil was the father of Legolas Greenleaf, a supporting character in The Lord of the Rings. The
            gradually-established friendship between Legolas and the Dwarf Gimli, the son of Gl&oacute;in of The Hobbit, helps to
            reconcile Thranduil's people and the Dwarves. 
            <br/>
            <br/>
            The appendices to The Return of the King note that Thranduil withstood
            attacks by Sauron during northern battles of the War of the Ring, meeting with Celeborn and his people to together
            destroy Dol Guldur and cleanse Mirkwood of Sauron's taint of evil. Also, Legolas and the Silvan Elves later worked
            together with Gimli and the Dwarves to rebuild and improve Minas Tirith, capital city of Gondor, the realm of their
            mutual friend Aragorn. The last time Thranduil was mentioned was soon after Sauron's final defeat.
         </p>
      </div>
      <!--end of column2-->
      <div class="first column merge">
         <h3 class="spacing center">Stephen Fry</h3>
         <p>
            <img class="cast img-center" src="img/cast/stephen-fry.jpg" alt="Stephen Fry."/>
         </p>
         <p class="initial">
            Stephen Fry has had a multi&ndash;faceted career, including success as an actor, writer and director.
            Fry shared in a Screen Actors Guild Award&reg; and a Critics' Choice Award as a member of the ensemble cast of Robert
            Altman's "Gosford Park." He also received a Golden Globe nomination for his portrayal of famed playwright Oscar Wilde
            in the biopic "Wilde." In 2003, he made his feature film directorial debut with "Bright Young Things," helming from his
            own screenplay and also appearing in the film. Among his other film acting credits are "Sherlock Holmes: A Game of
            Shadows," "Alice in Wonderland" "Eichmann," "V for Vendetta," "The Hitchhiker's Guide to the Galaxy," "The Life and
            Death of Peter Sellers," "Peter's Friends," and "A Fish Called Wanda."
            <br/>
            <br/>
            Born in the UK, Fry attended
            Cambridge University, where he first worked with Hugh Laurie. Together with Laurie, Emma Thompson and Tony Slattery,
            Fry wrote and performed "The Footlights Revue," which was televised by the BBC in 1982. He again teamed with Laurie and
            Thompson, as well as Ben Elton and Robbie Coltrane, on the Granada comedy series "Alfresco." Fry and Laurie went on to
            collaborate on "Blackadder," "A Bit of Fry and Laurie" and "Jeeves and Wooster."
            <br/>
            <br/>
			He has also written and hosted a
            number of documentary TV projects, including "Fry's Planet," "Stephen Fry in America" and "Stephen Fry: HIV &amp; Me." In
            addition, Fry is the host of the BBC quiz show "QI," for which he has earned five BAFTA TV Award nominations for Best
            Entertainment Performance.
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Master of Lake-town</h3>
         <p>
            <img class="char img-center" src="img/char/master.jpg" alt="Master of Lake-town."/>
         </p>
         <p class="initial">
            Master of Lake-town is the title given to the elected leader of Esgaroth. The Master of the town when Bilbo and
            Thorin's Company arrived in The Hobbit was portrayed as capable, but more than a little greedy and cowardly. His name
            was never given, although he earned the unpopular title "money bags" later. 
            <br/>
            <br/>
            He was one of the few people in the town
            who did not eagerly welcome Bilbo and the Dwarves, fearing reprisal from the Wood Elf King. When Lake-town was
            destroyed by Smaug, the Master was largely held accountable, especially since he was one of the first to flee. Bard the
            Bowman, who had slain the dragon, was the hero of the people but he refused to seize control, insisting on working with
            the Master who did all he could to shift the blame onto the Dwarves.
            <br/>
            <br/>
            The Master did not fight in the Battle of Five
            Armies. Instead, he stayed behind to direct the rebuilding of the town. Afterwards Bard gave much gold to the Master
            for the people of the town, but the Master fell under "dragon sickness" and kept the gold for himself, fleeing Long
            Lake only to die of starvation in the wastes. It was afterward stated by Balin that a new Master had been elected who
            was more wise.
         </p>
      </div>
      <!--end of column2-->
      <div class="banner2 center">
         <h2>Crew</h2>
      </div>
      <!--end of banner-container-->
      <div class="first column merge">
         <h3 class="spacing center">Peter Jackson</h3>
         <p>
            <img class="cast img-center" src="img/cast/peter-jackson.jpg" alt="Peter Jackson."/>
         </p>
         <p class="initial">
            Peter Jackson (Director / Producer / Screenwriter) is one of the world's most successful filmmakers. His monumental
            achievement was "The Lord of the Rings" Trilogy, which he directed, as well as co&ndash;wrote and produced together with
            fellow Academy Award&reg; winners and frequent collaborators Fran Walsh and Philippa Boyens. Collectively, the films earned
            a total of 30 Academy Award&reg; nominations, winning 17 Academy Awards&reg;, including Best Picture for the final film.
            Jackson and Walsh had received their first Oscar&reg; nomination for Best Original Screenplay for their acclaimed film
            "Heavenly Creatures."
            <br/>
            <br/>
            Jackson once again plunged into the world of Middle&ndash;earth to direct, co&ndash;write and
            produce a trilogy of films adapting the enduringly popular masterpiece The Hobbit, by J.R.R. Tolkien. The first film in
            "The Hobbit" Trilogy, "The Hobbit: An Unexpected Journey," was released in 2012 and earned over $1 billion worldwide
            and three Academy Award&reg; nominations.
            <br/>
            <br/>
            Jackson also produced, with Steven Spielberg and Kathleen Kennedy, "The
            Adventures of Tintin," which was directed by Spielberg. The film won, amongst many other awards and nominations, the
            Golden Globe for Best Animated Feature and the Producers Guild of America Award for Animated Motion Picture Producers
            of the Year. The movie is the first of three, based on the world&ndash;renowned comic book series by Herg&eacute;, and Jackson will
            direct the second film in the trilogy.
            <br/>
            <br/>
            In 2010, he received a knighthood for his services to film.
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3 class="spacing center">Fran Walsh</h3>
         <p>
            <img class="char img-center" src="img/cast/fran-walsh.jpg" alt="Fran Walsh."/>
         </p>
         <p class="initial">
            Fran Walsh (Producer / Screenwriter) shared writing, producing and songwriting credits on Peter Jackson's "The Lord of
            the Rings: The Return of the King," for which she won three Academy Awards&reg;, two BAFTA Awards, and two Golden Globe
            Awards, all including Best Picture. She also won a Grammy Award for the song "Into the West," and earned a Producers
            Guild Award. She had previously been recognized with a number of award nominations, including three Oscar&reg; nods, for
            her work as a screenwriter and producer on the first two films in the trilogy: "The Lord of the Rings: The Fellowship
            of the Ring" and "The Lord of the Rings: The Two Towers."
            <br/>
            <br/>
            Walsh returned to Middle-earth to co-write and
            produce a trilogy of films adapting the enduringly popular masterpiece The Hobbit, by J.R.R. Tolkien. She also
            contributed to songs that are heard in the Trilogy, including "Torture Song" in the first film, 2012's "The Hobbit: An
            Unexpected Journey," which she co-wrote with Philippa Boyens.
            <br/>
            <br/>
            Walsh received her first Academy Award&reg;
            nomination, for Best Original Screenplay, for her work on "Heavenly Creatures," which she co-wrote with Jackson. She
            more recently collaborated with Jackson as both a producer and screenwriter on the 2005 remake of "King Kong" and "The
            Lovely Bones," based on the best-selling novel. Her earlier credits as a co-writer with Jackson include "The
            Frighteners," "Dead Alive" and "Meet the Feebles."
            <br/>
            <br/>
            Walsh began her writing career soon after leaving
            Victoria University, where she majored in English Literature. She also has a background in music.
         </p>
      </div>
      <!--end of column2-->
	  
<!--footer-->
<?php
## Determines which current page link is to be highlighted
if(!isset($current)) { $current = basename(__FILE__, '.php'); }
 ## Include footer.php
require_once('include/footer.php');
?>
   </body>
</html>