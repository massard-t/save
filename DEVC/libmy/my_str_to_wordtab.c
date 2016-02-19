#include<stdlib.h>

int	my_alphanum(char c)
{
  if ((c < 48) || (c > 57 && c < 65))
    return (0);
  else if ((c > 90 && c < 97) || (c > 122))
    return (0);
  else
    return (1);
}

int	my_cw(char *str)
{
  int	n_w;
  int	count;

  n_w = 1;
  count = 0;
  while (*str != '\0')
    {
      if (my_alphanum(*str) == 0)
	{
	  n_w++;
	  count = 0;
	  while (my_alphanum(str[count]) == 0)
	    count++;
	  str += count - 1;
	}
      ++str;
    }
  return (n_w);
}

int	my_cwh(char *str)
{
  int count;

  count = 0;
  while (my_alphanum(*str) != 0)
    {
      ++str;
      count++;
    }
  return (count);
}

char	**prog_wordtab(char **ftab, int w, char *str, int *count)
{
  int	chhar;

  while (count[0] < w && *str != 0)
    {
      while (my_alphanum(*str) == 0)
	{
	  ++str;
	}
      chhar = my_cwh(str);
      ftab[count[0]] = malloc((chhar + 1) * sizeof(*ftab));
      count[1] = 0;
      while (my_alphanum(*str) == 1)
	{
	  ftab[count[0]][count[1]] = *str;
	  count[1]++;
	  str++;
	}
      ftab[count[0]][count[1]] = '\0';
      ++count[0];
    }
  ftab[count[0]] = 0;
  return (ftab);
}

char	**my_str_to_wordtab(char *str)
{
  int	count[2];
  int	w;
  char	**ftab;

  w = my_cw(str);
  ftab = malloc((w + 1) * sizeof(*ftab));
  count[0] = 0;
  count[1] = 0;
  ftab = prog_wordtab(ftab, w, str, count);
  return (ftab);
}
