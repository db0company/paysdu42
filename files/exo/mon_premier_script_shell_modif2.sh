# Made by             db0
# Contact             db0company[at]gmail[dot]com
# Website             http://db0.fr/

# Fonctions

score()
{
    score_file=".score_devine_nombre"
    if [ -e $score_file ]
    then
	best_score=`cat $score_file`
	if [ $count -gt $best_score ]
	then
	    echo "Tu n'as pas battu le meilleur score : $best_score. Essaie encore !"
	else
	    echo "Bravo ! Tu as battu le meilleur score."
	    echo $count > $score_file
	fi
    else
	echo $count > $score_file
    fi
}

devine_nombre()
{
    rand_number=$[ $RANDOM % 20]
    search_number=0
    echo "Cherche le nombre compris entre 1 et 20"
    count=0
    while [ $search_number -ne $rand_number ]
    do
        echo -n "Choisis un nombre : "
        read search_number
	tmp_nombre=$search_number
	tmp_nombre=$[search_number+0]
	if [ $search_number = $tmp_nombre ];
	then
            if [ $search_number -ne $rand_number ]
            then
		count=$(($count+1))
		echo -n "Essaye encore "
		if [ $search_number -gt $rand_number ]
		then
		    echo "avec un nombre plus petit."
		else
		    echo "avec un nombre plus grand."
		fi
            elif [ $search_number -eq $rand_number ]
	    then
		echo "Bravo ! Le nombre etait bien $rand_number"
		echo "Tu as trouve apres $count essais."
		score $count
            fi
	else
	    echo "Tu m'as pas donne de chiffre, vilain"
	    search_number=0
	fi

    done
    echo "Merci pour ce petit jeu."
}

fiche_user()
{
    fiche_user="fiche_user_$1.txt"
  # mettre le nom dans la fiche
    echo "Nom : $1" > $fiche_user
  # mettre le shell par defaut dans la fiche
    result_grep=`grep $1 /etc/passwd`
    if [ -z $result_grep ]
    then
        echo "L'utilisateur $1 n'existe pas"
        rm -f $fiche_user
        exit 1
    fi
    result_cut=`echo $result_grep | cut -d':' -f7`
    if  [ -n $result_cut ]
    then
        echo "Shell par defaut :" $result_cut >> $fiche_user
    fi
  # affichage de la fiche
    echo "Fiche terminee :"
    cat $fiche_user
}

# Recuperer le nom d'utilisateur dans la ligne de commande
if [ $# -eq 1 ]
then
    echo "Bonjour $1"
else
    echo "Attention tu as oublie de me dire ton nom comme argument."
    exit 1
fi

# Demander l'option
echo "Option 1 : Jeu, Devine le nombre"
echo "Option 2 : Creer une fiche sur $1"
echo "Option 3 : Creer une fiche sur $USER"

echo -n "Quelle option tu choisis ? "
read option

case $option in
    1)
	devine_nombre
	;;
    2)
	fiche_user $1
	;;
    3)
	fiche_user $USER
	;;
    *)
	echo "l'option n'existe pas"
	exit 1
	;;
esac
