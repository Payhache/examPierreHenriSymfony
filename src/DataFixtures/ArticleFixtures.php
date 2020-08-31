<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $titles = ['Combien de temps Julian Alaphilippe peut-il garder le maillot jaune ?','Le Parquet de Paris ouvre une enquête pour  injures à caractère raciste » après l’article sur Danièle Obono','Allemagne : Une jeune Alsacienne gagne un télé-crochet avec sa chanson sur Marseille','Le projet de loi sur les dérogations à l’interdiction des néonicotinoïdes présenté jeudi'];
        $content = ['Julian Alaphilippe n’avait pas assez transpiré. Le corps du puncheur héroïque avait encore quelques millilitres d’eau à perdre, malgré les cinq heures d’effort dans le cagnard. Il s’est effondré en larmes après sa victoire lors de la deuxième étape du Tour de France, ce dimanche à Nice.
        Un membre du staff de son équipe, Deceuninck-Quick Step, était là pour lui enlever son casque, ses lunettes, lui tendre un masque et lui glisser une parole réconfortante. Mais Julian Alaphilippe a mis plusieurs minutes avant de reprendre ses esprits. En passant la ligne, il avait tendu un doigt vers le ciel, avant de donner des coups de poing rageurs dans son guidon. Un hommage à son père, Jo, décédé en juin dernier.','Une enquête préliminaire a été ouverte par le Parquet de Paris pour  injures à caractère raciste » ce lundi après la publication d’un article de Valeurs Actuelles publié le 27 août 2020. Il s’agissait d’une fiction dépeignant Danièle Obono, députée de la France Insoumise, en esclave il y  a plusieurs siècles.
        L’article avait été unanimement condamné par l’ensemble de la classe politique. Les membres de Valeurs Actuelles avaient réfuté tout caractère raciste à leur publication, même s’ils avaient dit comprendre l’émotion de Danièle Obono après cet article','Sept duels gagnés et un triomphe à l’arrivée ! La chanteuse alsacienne Pauline, son nom de scène, a remporté dimanche Immer Wieder Sonntags, un télécrochet diffusé sur la première chaîne de télévision allemande, Das Erste.

        Devant plus d’un million de téléspectateurs, la jeune fille, bientôt 20 ans, a obtenu 63 % des suffrages en finale grâce à sa chanson Sommer in Marseille (L’été à Marseille).  Me produire sept dimanches de suite sur la même scène que les plus grands noms du schlager (la musique populaire allemande), c’était un rêve éveillé pour moi qui ai fait partie du public de nombreuses fois. Je n’oublierai jamais cette belle aventure humaine », a-t-elle déclaré après son succès.','Si les néonicotinoïdes sont interdits en France depuis deux ans, un projet de loi permettant des dérogations sera présenté ce jeudi en Conseil des ministres, a annoncé le ministre de l’Agriculture Julien Denormandie, ce lundi sur RMC/BFMTV.  Il y aura dérogation, en tout cas il y aura présentation d’un projet de loi dès cette semaine en Conseil des ministres » a-t-il précisé, pour  permettre des dérogations à ces néonicotinoïdes quand il y a une urgence sanitaire ».

        Les planteurs de betteraves avaient réclamé de pouvoir les utiliser pour s’attaquer aux pucerons verts, vecteurs du virus de la jaunisse qui fait s’effondrer les rendements cette année. Le gouvernement avait annoncé début août viser une modification législative à l’automne pour les autoriser à utiliser dès 2021 et jusqu’en 2023 maximum, sous  conditions strictes », des semences de betteraves enrobées de cet insecticide afin de  pérenniser » la filière sucrière française.'];
        for ($i=0; $i < count($titles) ; $i++) { 
            $article = new Article();
            $article->setTitle($titles[$i]);
            $article->setContent($content[$i]);
            $article->setPicture('placeHolder.png');
            $manager->persist($article);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
