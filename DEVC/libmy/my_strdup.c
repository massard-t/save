#include<stdlib.h>

int	my_strlen(char *str);

char	*my_strcpy(char *dest, char *src);

char	*my_strdup(char *str)
{
  char	*tab;
  int	a;

  a = my_strlen(str);
  tab = malloc(a * sizeof(char));
  my_strcpy(tab, str);
  return (tab);
}
