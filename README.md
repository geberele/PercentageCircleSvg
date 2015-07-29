#Percentage Circle Svg
This PHP class allow you to get Percentage Circle Svg. Really customazible, you can change the percenatge, the colors, etc...

##How to use it
```
$svg = new PercentageCircleSvg(50, 25);
print $svg->getSvg();
```

<div class="content">
<svg height="300" width="300" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="130" cx="150" cy="150" fill="black"></circle>
          </mask>
        </defs><g><circle cx="150" cy="150" r="150" fill="green" mask="url(#donutMask)"></circle><path fill="#056322" d="M 150, 0
                   A 150, 150, 0, 1, 1, 20.096189432334, 225
                   L 150, 150 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">70</tspan>%</text></g></svg>
                   
    <svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 100, 50
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="green"><tspan id="span-content" fill="blue">25</tspan>%</text></g></svg><br><svg height="200" width="200" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="90" cx="100" cy="100" fill="black"></circle>
          </mask>
        </defs><g><circle cx="100" cy="100" r="100" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 100, 0
                   A 100, 100, 0, 0, 1, 100, 200
                   L 100, 100 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">50</tspan>%</text></g></svg><br><svg height="200" width="200" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="90" cx="100" cy="100" fill="black"></circle>
          </mask>
        </defs><g><circle cx="100" cy="100" r="100" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 100, 0
                   A 100, 100, 0, 1, 1, 0, 100
                   L 100, 100 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">75</tspan>%</text></g></svg><br><svg height="200" width="200" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="90" cx="100" cy="100" fill="black"></circle>
          </mask>
        </defs><g><circle cx="100" cy="100" r="100" fill="black" mask="url(#donutMask)"></circle><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">100</tspan>%</text></g></svg><br><svg height="400" width="400" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="180" cx="200" cy="200" fill="black"></circle>
          </mask>
        </defs><g><circle cx="200" cy="200" r="200" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 200, 0
                   A 200, 200, 0, 0, 1, 341.42135623731, 341.42135623731
                   L 200, 200 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">33</tspan>%</text></g></svg><br><svg height="300" width="300" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="140" cx="150" cy="150" fill="black"></circle>
          </mask>
        </defs><g><circle cx="150" cy="150" r="150" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 150, 0
                   A 150, 150, 0, 1, 1, 43.933982822018, 256.06601717798
                   L 150, 150 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">66</tspan>%</text></g></svg><br><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 14.644660940673
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">12</tspan>%</text></g></svg><br><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">0</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">1</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">2</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">3</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">4</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">5</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">6</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">7</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">8</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">9</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">10</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 14.644660940673
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">11</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 14.644660940673
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">12</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 14.644660940673
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">13</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">14</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">15</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">16</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">17</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">18</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">19</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">20</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 98.296291314453, 37.059047744874
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">21</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 98.296291314453, 37.059047744874
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">22</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 98.296291314453, 37.059047744874
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">23</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 98.296291314453, 37.059047744874
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">24</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 100, 50
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">25</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">26</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">27</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">28</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">29</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">30</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">31</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 93.301270189222, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">32</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">33</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">34</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">35</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">36</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">37</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 85.355339059327, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">38</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">39</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">40</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 75, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">41</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 62.940952255126, 98.296291314453
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">42</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 62.940952255126, 98.296291314453
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">43</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 62.940952255126, 98.296291314453
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">44</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 62.940952255126, 98.296291314453
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">45</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 62.940952255126, 98.296291314453
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">46</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 62.940952255126, 98.296291314453
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">47</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 62.940952255126, 98.296291314453
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">48</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 62.940952255126, 98.296291314453
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">49</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 0, 1, 50, 100
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">50</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">51</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">52</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">53</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">54</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">55</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">56</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">57</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 93.301270189222
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">58</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">59</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">60</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">61</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">62</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">63</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">64</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">65</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 85.355339059327
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">66</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">67</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">68</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">69</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 75
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">70</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 1.7037086855466, 62.940952255126
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">71</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 1.7037086855466, 62.940952255126
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">72</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 1.7037086855466, 62.940952255126
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">73</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 1.7037086855466, 62.940952255126
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">74</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 0, 50
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">75</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">76</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">77</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">78</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">79</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">80</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">81</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">82</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 6.6987298107781, 25
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">83</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 14.644660940673
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">84</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 14.644660940673
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">85</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 14.644660940673
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">86</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 14.644660940673
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">87</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 14.644660940673, 14.644660940673
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">88</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">89</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">90</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 25, 6.6987298107781
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">91</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 45.642212862617, 0.19026509541272
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">92</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 45.642212862617, 0.19026509541272
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">93</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 45.642212862617, 0.19026509541272
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">94</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 45.642212862617, 0.19026509541272
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">95</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 45.642212862617, 0.19026509541272
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">96</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 45.642212862617, 0.19026509541272
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">97</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 45.642212862617, 0.19026509541272
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">98</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="red" mask="url(#donutMask)"></circle><path fill="black" d="M 50, 0
                   A 50, 50, 0, 1, 1, 45.642212862617, 0.19026509541272
                   L 50, 50 Z" mask="url(#donutMask)"></path><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">99</tspan>%</text></g></svg><svg height="100" width="100" version="1.1" xmlns="http://www.w3.org/2000/svg"><style>
          #text-label { font-size: 24px; font-family: Helvetica; alignment-baseline: middle; font-weight: bold; }
          #span-content { font-size: 35px; font-weight: bold; margin: 0px; alignment-baseline: middle; }
        </style><defs>
          <mask id="donutMask">
            <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
            <circle r="40" cx="50" cy="50" fill="black"></circle>
          </mask>
        </defs><g><circle cx="50" cy="50" r="50" fill="black" mask="url(#donutMask)"></circle><text id="text-label" x="51%" y="51%" text-anchor="middle" fill="black"><tspan id="span-content" fill="black">100</tspan>%</text></g></svg>  </div>