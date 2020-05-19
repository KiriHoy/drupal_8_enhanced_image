<?php

namespace Drupal\ckeditor_image2\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "Table Tools Toolbar" plugin.
 *
 * @CKEditorPlugin(
 *   id = "image2",
 *   label = @Translation("Image 2")
 * )
 */
class image2 extends CKEditorPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return base_path() . 'libraries/image2/plugin.js';
  }

  /**
   * {@inheritdoc}
   */

  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [
    'image2' => [
      'label' => t('image'),
      'image' => base_path() . 'libraries/image2/icons/image.png',
    ]
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * Return ckeditor tabletoolstoolbar plugin path relative to drupal root.
   *
   * @return string
   *   Relative path to the ckeditor plugin folder
   */
  private function getPluginPath() {
    return 'libraries/image2';
  }

}
