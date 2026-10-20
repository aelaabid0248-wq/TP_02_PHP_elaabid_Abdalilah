# TP 02 — PHP

**Module :** Programmation Web 2 — 2026/2027
**Nom :** ELAABID
**Prénom :** Abdelilah
**Groupe :** G4

## Exercices

1. Exercice 1 : balises, commentaires, echo
2. Exercice 2 : variables et concaténation
3. Exercice 3 : constantes et calculs
4. Exercice 4 : types et conversions
5. Exercice 5 : conditions
6. Exercice 6 : switch
7. Exercice 7 : boucles for
8. Exercice 8 : while, do-while, break, continue
9. Exercice 9 : tableau a## Réponses

### Exercice 2
`$note` et `$Note` sont deux variables différentes, car PHP distingue les majuscules et les minuscules dans les noms de variables.

Noms valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
Noms invalides : `$a!` (caractère spécial interdit) et `$1a` (un nom ne peut pas commencer par un chiffre).

### Exercice 4
Avec `echo`, `false` s'affiche comme une chaîne vide (rien n'apparaît), alors que `true` s'affiche `1`. Avec `var_dump()`, on voit `bool(false)` et `bool(true)` : le type et la valeur sont affichés.

### Exercice 5
| Moyenne testée | Message obtenu |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

### Exercice 10
Avec GET, les valeurs apparaissent dans l'URL (par exemple `ex10_get.php?nom=...&prenom=...&groupe=G4`). Avec POST, elles n'apparaissent pas dans l'URL : elles sont envoyées dans le corps de la requête.ssociatif
10. Exercice 10 : formulaires GET/POST
