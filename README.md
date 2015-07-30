#Percentage Circle Svg
This PHP class allows you to create Percentage Circle Svg. Really customizable, you can change the radius of the circle, the percentage, the stroke width, the colors, the text, etc...
![Percentage Circle Svg](https://www.drupal.org/files/project-images/percentage_circle_svg.png)

##How to use it
```
$svg = new PercentageCircleSvg(50, 50);
print $svg->getSvg();
```
[Svg example 50%](https://github.com/geberele/PercentageCircleSvg/blob/master/images/example_50.svg)

```
$svg = new PercentageCircleSvg(150, 70, 20, '#056322', 'green');
print $svg->getSvg();
```
[Svg example 70%](https://github.com/geberele/PercentageCircleSvg/blob/master/images/example_70.svg)

```
$svg = new PercentageCircleSvg(50, 25, 30, 'grey', 'black', 'white', 'white', 'none');
print $svg->getSvg();
```
[Svg example 25%](https://github.com/geberele/PercentageCircleSvg/blob/master/images/example_25.svg)

```
$svg = new PercentageCircleSvg(70, 66, 5, 'purple', 'pink');
print $svg->getSvg();
```
[Svg example 66%](https://github.com/geberele/PercentageCircleSvg/blob/master/images/example_66.svg)
