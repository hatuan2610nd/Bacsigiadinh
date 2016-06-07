package com.mta.th10.bacsigiadinh.viewmodels;

import java.util.List;

import org.simpleframework.xml.Element;
import org.simpleframework.xml.ElementList;
import org.simpleframework.xml.Root;

//	[XmlRoot(ElementName="channel")]
@Root(name="channel")
public class RssChannel {

	@Element
	private String title;

	@Element
	private String description;

	@Element
	private RssImage image;

	@Element
	private String pubDate;

	@Element
	private String generator;

	@Element
	private String link;

	@ElementList(name = "item", inline = true)
	private List<RssItem> items;

	public String getTitle() {
		return title;
	}

	public String getDescription() {
		return description;
	}

	public RssImage getImage() {
		return image;
	}

	public String getPubDate() {
		return pubDate;
	}

	public String getGenerator() {
		return generator;
	}

	public String getLink() {
		return link;
	}

	public List<RssItem> getItems() {
		return items;
	}

}
