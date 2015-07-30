<?php
/**
 * @file
 * PercentageCircleSvg class.
 */

namespace PercentageCircleSvg;

/**
 * Class PercentageCircleSvg.
 *
 * For more information about Svg Paths visit the link below:
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial/Paths
 */
class PercentageCircleSvg {

  /**
   * The radius.
   *
   * @var int
   */
  protected $radius;

  /**
   * The X center of the circle.
   *
   * @var int
   */
  protected $centerX;

  /**
   * The Y center of the circle.
   *
   * @var int
   */
  protected $centerY;

  /**
   * The stroke width.
   *
   * @var int
   */
  protected $strokeWidth;

  /**
   * The percentage to show in the svg.
   *
   * @var int
   */
  protected $percentage;

  /**
   * The commands to draw the circle path.
   *
   * @var string
   */
  protected $draw;

  /**
   * The color of the donut mask.
   *
   * @var string
   */
  protected $donutMaskColor;

  /**
   * The color of the circle.
   *
   * @var string
   */
  protected $circleColor;

  /**
   * The color of the mask.
   *
   * @var string
   */
  protected $colorMask;

  /**
   * The color of the text in the span.
   *
   * @var string
   */
  protected $spanContentColor;

  /**
   * The color of the text in the label.
   *
   * @var string
   */
  protected $textLabelColor;

  /**
   * The text in the label.
   *
   * @var int
   */
  protected $textLabel;

  /**
   * The text in the span.
   *
   * @var string
   */
  protected $spanContent = '%';

  /**
   * The CSS for the text in the label.
   *
   * @var string
   */
  protected $styleTextLabel = 'font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold;';

  /**
   * The CSS for the text in the span.
   *
   * @var string
   */
  protected $styleSpanContent = 'font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle;';

  /**
   * Constructor.
   *
   * @param int $radius
   *   The circle radius.
   * @param int $percentage
   *   The progress in percentage.
   * @param int $stroke_width
   *   The width of the stroke.
   * @param string $donut_mask_color
   *   The color of the progress circle.
   * @param string $circle_color
   *   The color of the background.
   * @param string $span_color
   *   The color of the label.
   * @param string $label_color
   *   The color of the span.
   * @param string $color_mask
   *   The color of the mask, use 'none' to get the full pie.
   */
  public function __construct($radius, $percentage = 30, $stroke_width = 10, $donut_mask_color = 'black', $circle_color = 'red', $span_color = 'black', $label_color = 'black', $color_mask = 'black') {
    $this->radius = (int) $radius;

    $this->centerX = $this->radius;
    $this->centerY = $this->radius;

    $this->donutMaskColor = $donut_mask_color;
    $this->circleColor = $circle_color;
    $this->spanContentColor = $span_color;
    $this->textLabelColor = $label_color;
    $this->colorMask = $color_mask;

    $this->percentage = $percentage;
    $this->textLabel = $percentage;
    $this->strokeWidth = $stroke_width;

    $x_start = $this->radius;
    $y_start = 0;

    $rx = $this->radius;
    $ry = $this->radius;

    $x_axis_rotation = 0;
    $large_arc_flag = 1;
    $sweep_flag = 1;

    $angle = $this->getAngle($percentage);

    if ($this->percentage <= 50) {
      $large_arc_flag = 0;
    }

    if ($this->percentage >= 100) {
      $this->circleColor = $this->donutMaskColor;
    }

    $x_point = cos(deg2rad($angle));
    $y_point = sin(deg2rad($angle));
    $x_end = $this->radius + ($this->radius * $x_point);
    $y_end = $this->radius - ($this->radius * $y_point);

    $this->draw = "M $x_start, $y_start
                   A $rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x_end, $y_end
                   L $this->centerX, $this->centerY Z";
  }

  /**
   * Set variables.
   *
   * @param string $name
   *   Variable name.
   * @param string|int $value
   *   Variable value.
   */
  public function setVariable($name, $value) {
    if (isset($this->$name)) {
      $this->$name = $value;
    }
  }

  /**
   * Get the SVG.
   *
   * @return string
   *   Html output.
   */
  public function getSvg() {
    $radius_circle = $this->radius - $this->strokeWidth;
    $height = $this->radius * 2;
    $width = $height;

    $output = '<svg height="' . $height . '" width="' . $width . '" version="1.1" xmlns="http://www.w3.org/2000/svg">'
      . '<style>
          #text-label { ' . $this->styleTextLabel . ' }
          #span-content { ' . $this->styleSpanContent . ' }
        </style>'
      . '<defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white" />
            <circle r="' . $radius_circle . '" cx="' . $this->radius . '" cy="' . $this->radius . '" fill="' . $this->colorMask . '" />
          </mask>
        </defs>'
      . '<g><circle cx="' . $this->radius . '" cy="' . $this->radius . '" r="' . $this->radius . '" fill="' . $this->circleColor . '" mask="url(#donutMask)"/>';

    if ($this->percentage > 0 && $this->percentage < 100) {
      $output .= '<path fill="' . $this->donutMaskColor . '" d="' . $this->draw . '" mask="url(#donutMask)"></path>';
    }

    $output .= '<text id="text-label" x="51%" y="51%" text-anchor="middle" fill="' . $this->spanContentColor . '">'
    . '<tspan id="span-content" fill="' . $this->textLabelColor . '">' . $this->textLabel . '</tspan>' . $this->spanContent . '</text></g></svg>';

    return $output;
  }

  /**
   * Get the angle of the circle according the percentage.
   *
   * @param int $percentage
   *   The percentage value.
   *
   * @return int
   *   The angle value.
   */
  protected function getAngle($percentage) {
    $needle = 360 / 100;
    $angle = 90 - ($percentage * $needle);
    return $angle;
  }

}
