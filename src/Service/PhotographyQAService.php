<?php

namespace Drupal\photography_qa\Service;
//qa_service
class PhotographyQAService {
  
    public function getButtons(){
        $buttons = [
          'aperture',      
          'shutter speed',
          'iso' ,
          'rule of thirds', 
          'white balance', 
          'depth of field',
          'exposure triangle' ,
          'golden hour',
          'blue hour',
          'bokeh',
          'leading lines' ,
          'long exposure' ,
          'hdr',
          'macro photography',
          'low light photography' ,
          'night photography',
          'street photography',
          'portrait photography' ,
          'wildlife photography' ,
          'landscape photography' ,
          'action photography',
          'black and white photography' ,
          'composition' ,
          'camera sensor',
          'film photography',
          'dslr vs mirrorless',
      ];
    
      return $buttons;
    }

    public function getRulesEasy() {
        /*return [
            'aperture' => 'Aperture controls light and depth of field.',
            'shutter speed' => 'Shutter speed determines exposure time.',
            'iso' => 'ISO adjusts sensor sensitivity.',
        ];*/

        $rules = [
          'aperture' => "Aperture controls the amount of light entering the camera. A lower f-stop (e.g., f/2.8) means a wider aperture and more background blur.",
          'shutter speed' => "Shutter speed determines how long the sensor is exposed to light. A fast speed (1/1000s) freezes motion, while a slow speed (1/30s) creates motion blur.",
          'iso' => "ISO controls the sensor’s sensitivity to light. A higher ISO (e.g., 3200) is useful in low light but may introduce noise.",
          'rule of thirds' => "The Rule of Thirds is a composition guideline where the frame is divided into a 3x3 grid, and subjects are placed along the lines or intersections.",
          'white balance' => "White balance adjusts color temperature to ensure accurate colors. Common presets include daylight, cloudy, and tungsten.",
          'depth of field' => "Depth of field refers to the area in focus in a photo. A shallow depth (f/2.8) isolates the subject, while a deep depth (f/11) keeps more in focus.",
          'exposure triangle' => "The Exposure Triangle consists of ISO, Aperture, and Shutter Speed. Adjusting one setting affects the others to balance exposure.",
          'golden hour' => "Golden Hour is the period shortly after sunrise and before sunset, offering soft, warm light ideal for photography.",
          'bokeh' => "Bokeh is the aesthetic quality of blurred areas in an image, usually achieved with a wide aperture (f/1.8, f/2.8).",
          'street photography' => "Street photography captures candid moments in public places. Use a fast shutter speed and be observant of unique scenes.",
          'wildlife photography' => "Wildlife photography requires a telephoto lens (200mm+), fast shutter speed, and patience to capture animals in motion.",
          'landscape photography' => "Use a narrow aperture (f/11-f/16) and a tripod for sharp landscapes. Golden hour provides ideal lighting.",
          'black and white photography' => "Black and white photography focuses on contrast and texture. Shoot in RAW and convert in post-processing.",
          'film photography' => "Film photography requires selecting the right film type (color or black & white) and understanding film speed (ISO).",
        ];
    
        return $rules;

    }
    public function getRulesAdvanced(){
      $rules = [
        'aperture' => 'Aperture controls the amount of light entering the camera. A lower f-stop (e.g., f/2.8) means a wider aperture and more background blur.',
        'shutter speed' => 'Shutter speed determines how long the sensor is exposed to light. A fast speed (1/1000s) freezes motion, while a slow speed (1/30s) creates motion blur.',
        'iso' => 'ISO controls the sensor’s sensitivity to light. A higher ISO (e.g., 3200) is useful in low light but may introduce noise.',
        'rule of thirds' => 'The Rule of Thirds is a composition guideline where the frame is divided into a 3x3 grid, and subjects are placed along the lines or intersections.',
        'white balance' => 'White balance adjusts color temperature to ensure accurate colors. Common presets include daylight, cloudy, and tungsten.',
        'depth of field' => 'Depth of field refers to the area in focus in a photo. A shallow depth (f/2.8) isolates the subject, while a deep depth (f/11) keeps more in focus.',
        'exposure triangle' => 'The Exposure Triangle consists of ISO, Aperture, and Shutter Speed. Adjusting one setting affects the others to balance exposure.',
        'golden hour' => 'Golden Hour is the period shortly after sunrise and before sunset, offering soft, warm light ideal for photography.',
        'blue hour' => 'Blue Hour is the time just before sunrise and after sunset, giving a cool, atmospheric tone to photos.',
        'bokeh' => 'Bokeh is the aesthetic quality of blurred areas in an image, usually achieved with a wide aperture (f/1.8, f/2.8).',
        'leading lines' => 'Leading Lines are compositional elements that guide the viewer’s eye through an image, such as roads, rivers, or fences.',
        'long exposure' => 'Long Exposure uses a slow shutter speed (e.g., 10s) to capture motion effects like light trails or smooth water.',
        'hdr' => 'HDR (High Dynamic Range) combines multiple exposures to retain details in both shadows and highlights.',
        'macro photography' => 'Macro Photography captures extreme close-ups of small subjects, often using a macro lens with a 1:1 magnification ratio.',
        'low light photography' => 'For low light photography, use a fast lens (f/1.8), increase ISO, and stabilize the camera with a tripod.',
        'night photography' => 'For night photography, use a slow shutter speed, low aperture (f/2.8), and adjust ISO while keeping noise minimal.',
        'street photography' => 'Street photography captures candid moments in public places. Use a fast shutter speed and be observant of unique scenes.',
        'portrait photography' => 'For portraits, use a wide aperture (f/2.8) to blur the background and focus on the subject. Good lighting enhances the shot.',
        'wildlife photography' => 'Wildlife photography requires a telephoto lens (200mm+), fast shutter speed, and patience to capture animals in motion.',
        'landscape photography' => 'Use a narrow aperture (f/11-f/16) and a tripod for sharp landscapes. Golden hour provides ideal lighting.',
        'action photography' => 'For action shots, use a fast shutter speed (1/1000s or higher) and continuous autofocus to freeze motion.',
        'black and white photography' => 'Black and white photography focuses on contrast and texture. Shoot in RAW and convert in post-processing.',
        'composition' => 'Good composition includes using rules like the rule of thirds, leading lines, symmetry, and framing to create engaging images.',
        'camera sensor' => 'A camera sensor determines image quality. Full-frame sensors offer better low-light performance, while crop sensors provide extra reach.',
        'film photography' => 'Film photography requires selecting the right film type (color or black & white) and understanding film speed (ISO).',
        'dslr vs mirrorless' => 'DSLR cameras have optical viewfinders and longer battery life, while mirrorless cameras are lighter and offer electronic viewfinders.',
  
      ];
      return $rules;
    }
    public function getExercises($keyword){
      
      $exercises = [
        'aperture' => [
          "Take a portrait at f/2.8 and f/11 to compare background blur.",
          "Shoot in low light and adjust aperture to maintain correct exposure.",
          "Capture a landscape with a small aperture (f/11 or higher) for greater depth of field."
        ],
        'shutter speed' => [
          "Capture a moving car at different shutter speeds.",
          "Use slow shutter speed to photograph light trails at night.",
          "Try panning with a moving subject to create motion blur."
        ],
        'iso' => [
          "Shoot at ISO 100, 800, and 3200 and compare image quality.",
          "Capture a night scene using different ISO settings.",
          "Adjust ISO while keeping shutter speed and aperture constant to understand exposure balance."
        ],
        'rule of thirds' => [
          "Take 5 photos where the subject is positioned on an intersection of the grid.",
          "Reframe an old photo to follow the Rule of Thirds.",
          "Compare a centered vs. rule-of-thirds composition."
        ],
        'white balance' => [
          "Take photos under different lighting conditions and manually adjust white balance.",
          "Use the custom white balance setting for an accurate color cast.",
          "Compare images shot in auto white balance vs. manual settings."
        ],
        'depth of field' => [
          "Take a macro shot with a shallow depth of field.",
          "Capture a group photo ensuring everyone is in focus.",
          "Adjust focal length and aperture to see its effect on depth of field."
        ],
        'exposure triangle' => [
          "Shoot a scene adjusting only one parameter at a time.",
          "Take a well-exposed photo in manual mode.",
          "Experiment with under and overexposing a shot."
        ],
        'golden hour' => [
          "Take a portrait during golden hour.",
          "Capture a landscape at sunrise or sunset.",
          "Compare midday light vs. golden hour light."
        ],
        'bokeh' => [
          "Capture bokeh lights at night.",
          "Take a close-up portrait emphasizing background blur.",
          "Experiment with different focal lengths to enhance bokeh."
        ],
        'street photography' => [
          "Capture 5 candid moments in your city.",
          "Try a street portrait with permission.",
          "Use a 35mm or 50mm lens for a natural field of view."
        ],
        'wildlife photography' => [
          "Photograph birds in flight using a high shutter speed.",
          "Capture an animal’s behavior or interaction.",
          "Try photographing at dawn or dusk for better lighting."
        ],
        'landscape photography' => [
          "Capture a sunrise or sunset scene.",
          "Use leading lines in a landscape shot.",
          "Try a long-exposure waterfall photo."
        ],
        'black and white photography' => [
          "Shoot high-contrast scenes in B&W.",
          "Capture a portrait emphasizing textures and shadows.",
          "Convert a color image to B&W and adjust contrast."
        ],
        'film photography' => [
          "Shoot a roll of film and develop it.",
          "Experiment with pushing or pulling film ISO.",
          "Compare digital and film images of the same scene."
        ],
      ];

     \Drupal::logger('photography_qa')->notice('Service UPDATE  User asked keyword found: ' . $keyword . ' | Exercises are : ' . print_r($exercises[$keyword], true));
 
      return $exercises[$keyword];
      
    }

  public function getRulesHashTags(){



    $rules = [
      'aperture' => "Aperture controls the amount of light entering the camera. A lower f-stop (e.g., f/2.8) means a wider aperture and more background blur. #BokehEffect",
      'shutter speed' => "Shutter speed determines how long the sensor is exposed to light. A fast speed (1/1000s) freezes motion, while a slow speed (1/30s) creates motion blur. #MotionCapture",
      'iso' => "ISO controls the sensor’s sensitivity to light. A higher ISO (e.g., 3200) is useful in low light but may introduce noise. #LowLightPhotography",
      'rule of thirds' => "The Rule of Thirds is a composition guideline where the frame is divided into a 3x3 grid, and subjects are placed along the lines or intersections. #CompositionTips",
      'white balance' => "White balance adjusts color temperature to ensure accurate colors. Common presets include daylight, cloudy, and tungsten. #ColorCorrection",
      'depth of field' => "Depth of field refers to the area in focus in a photo. A shallow depth (f/2.8) isolates the subject, while a deep depth (f/11) keeps more in focus. #PortraitPhotography",
      'exposure triangle' => "The Exposure Triangle consists of ISO, Aperture, and Shutter Speed. Adjusting one setting affects the others to balance exposure. #PhotographyBasics",
      'golden hour' => "Golden Hour is the period shortly after sunrise and before sunset, offering soft, warm light ideal for photography. #GoldenHourGlow",
      'bokeh' => "Bokeh is the aesthetic quality of blurred areas in an image, usually achieved with a wide aperture (f/1.8, f/2.8). #BokehLover",
      'street photography' => "Street photography captures candid moments in public places. Use a fast shutter speed and be observant of unique scenes. #StreetVibes",
      'wildlife photography' => "Wildlife photography requires a telephoto lens (200mm+), fast shutter speed, and patience to capture animals in motion. #WildlifeShots",
      'landscape photography' => "Use a narrow aperture (f/11-f/16) and a tripod for sharp landscapes. Golden hour provides ideal lighting. #NaturePhotography",
      'black and white photography' => "Black and white photography focuses on contrast and texture. Shoot in RAW and convert in post-processing. #BWPhotography",
      'film photography' => "Film photography requires selecting the right film type (color or black & white) and understanding film speed (ISO). #AnalogVibes",
    ];
    
    return $rules;
  }



}
