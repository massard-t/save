char	*my_strncpy(char *dest, char *src, int n)
{
  int   e;

  e = 0;
  while (e < n && src[e] != '\0')
    {
      dest[e] = src[e];
      ++e;
    }
  while (e < n)
    {
      dest[e] = '\0';
      e++;
    }
  return (dest);
}
