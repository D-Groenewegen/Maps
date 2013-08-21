<?php

namespace Maps\Test;

use Maps\ImageOverlay;

/**
 * Unit tests for the Maps\Rectangle class.
 *
 * @since 3.0
 *
 * @ingroup MapsTest
 *
 * @group Maps
 * @group MapsElement
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ImageOverlayTest extends RectangleTest {

	/**
	 * @see BaseElementTest::getClass
	 *
	 * @since 3.0
	 *
	 * @return string
	 */
	public function getClass() {
		return 'Maps\ImageOverlay';
	}

	/**
	 * @see BaseElementTest::constructorProvider
	 *
	 * @since 3.0
	 *
	 * @return array
	 */
	public function constructorProvider() {
		$argLists = array();

		foreach ( parent::constructorProvider() as $argList ) {
			$argList[0] = false;
			$argLists[] = $argList;
		}

		foreach ( parent::constructorProvider() as $argList ) {
			$argList[] = 'Foo.png';
			$argLists[] = $argList;
		}

		return $argLists;
	}

	/**
	 * @dataProvider instanceProvider
	 * @param \Maps\ImageOverlay $imageOverlay
	 * @param array $arguments
	 */
	public function testGetImage( ImageOverlay $imageOverlay, array $arguments ) {
		$this->assertEquals( $arguments[2], $imageOverlay->getImage() );
	}

}



