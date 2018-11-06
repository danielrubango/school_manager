#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/wait.h>

int main(void) {
    // Initialisation
    pid_t fils, fils2;
    int x1, x2, y1, y2, i1, i2, x, y, somme;

    // Creation du premier processus fils 1
    fils = fork();

    if (fils == -1) {
        fprintf(stderr, "Erreur de creation");
        return EXIT_FAILURE;
    }

    if (fils == 0) { // Premier fils
        printf("Entrez x1: ");
        scanf("%d", &x1);

        printf("Entrez x2: ");
        scanf("%d", &x2);

        printf("Entrez y1: ");
        scanf("%d", &y1);

        printf("Entrez y2: ");
        scanf("%d", &y2);

        printf("Entrez i1: ");
        scanf("%d", &i1);

        printf("Entrez i2: ");
        scanf("%d", &i2);

        y = ((x1 * i2) - (x2 * i1)) / (y2 - (x2 * y1));
        x = ((i1 - (y1 * y)) / x1);

        printf("Racines de X= %d et Y= %d\n", x^(1/2), b^(1/2));
    } else {
        // Creation processus fils 2
        fils2 = fork();

        if (fils2 == 0) { // Second fils
            printf("PID du deuxieme fils est %d et le pid de mon pere %d ", getpid(), getppid());
        } else { // Pere
            wait(0);

            for (int i = 0; i <= 100; i+=3)
            {
                somme += i;
            }

            printf("Voici la somme de tous les multiples de 3 inferieur a 100 %d", somme);
        }
    }

    return 0;
}
